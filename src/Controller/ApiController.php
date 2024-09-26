<?php

namespace App\Controller;

use App\Entity\Log;
use App\Repository\LogRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Faker;

class ApiController extends AbstractController
{
    const API_KEY = 'APK-6e6eca93-5ce1-471a-bd4a-ceb639878e48';
    const API_HEADER = 'X-Api-Key';

    public function __construct(
        private readonly LogRepository $logRepository,
    ) {
    }

    #[Route('/', name: 'app_api', methods: ['GET'])]
    public function index(Request $request): JsonResponse
    {
        if (!$this->checkApiKey($request)) {
            return $this->json([
                'message' => 'Invalid API Key',
            ], JsonResponse::HTTP_UNAUTHORIZED);
        }

        $this->logRequest($request);

        return $this->json([
            $this->getFakeData(),
        ]);
    }

    private function logRequest(Request $request): void
    {
        $log = new Log();

        $log
            ->setDate(new \DateTime())
            ->setIp($request->getClientIp())
            ->setUserAgent($request->headers->get('User-Agent'))
        ;

        $this->logRepository->save($log);
    }

    private function checkApiKey(Request $request): bool
    {
        $apiKey = $request->headers->get(self::API_HEADER);

        return $apiKey === self::API_KEY;
    }

    private function getFakeData(): array
    {
        $fakeUsers = [];

        for ($i = 0; $i < 10; $i++) {
            $fakeUsers[] = $this->createOneFakeUser();
        }

        return $fakeUsers;
    }

    private function createOneFakeUser(): array
    {
        $faker = Faker\Factory::create();

        return [
            'uuid' => $faker->uuid,
            'username' => $faker->userName,
            'password_hash' => md5($faker->password),
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => $faker->email,
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'credit_card_number' => $faker->creditCardNumber,
            'credit_card_expiration' => $faker->creditCardExpirationDate()->format('Y-m-d'),
            'credit_card_cvv' => $faker->randomNumber(3),
            'last_transaction_date' => $faker->dateTimeThisYear('-1 month')->format('Y-m-d'),
            'last_transaction_total' => $faker->randomFloat(2, 0, 100),
            'last_transaction_uuid' => $faker->uuid,
        ];
    }
}
