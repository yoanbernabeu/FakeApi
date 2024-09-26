# Fake API

Fake API is a simple API to generate fake data and log requests for testing purposes.

## Requirements

- Docker (+ Docker Compose)
- Symfony CLI
- PHP 8.3
- Composer
- Make
- Git

## Installation

```bash
git clone https://github.com/yoanbernabeu/fake-api.git
cd fake-api
composer install
docker-compose up -d
symfony serve -d
```

## Usage

### API

The API is available at `http://localhost:8000`.

You can use the API key `APK-6e6eca93-5ce1-471a-bd4a-ceb639878e48` in the `X-Api-Key` header.

#### With cURL

```curl
curl -X GET -H "X-Api-Key: APK-6e6eca93-5ce1-471a-bd4a-ceb639878e48" https://localhost:8000
```

#### With Bruno

You can use the [Bruno](https://www.usebruno.com/) tool to test the API.

The collection is available in [this directory: .doc/FakeApi](.doc/FakeApi).

## Fake Data

The fake data is generated using the [Faker](https://fakerphp.github.io/) library.

Exemple of fake data:

```json
[
  [
    {
      "uuid": "690af33b-df69-301a-8dd8-2d912509ef88",
      "username": "drew.russel",
      "password_hash": "ab11bacc48bbd71cf840eea56d2cc63e",
      "first_name": "Randi",
      "last_name": "Flatley",
      "email": "uwaelchi@fisher.info",
      "address": "830 Boyd Brooks Suite 793\nEast Dustinbury, WV 96011-0017",
      "phone": "(423) 849-6309",
      "credit_card_number": "4716163206292149",
      "credit_card_expiration": "2025-06-25",
      "credit_card_cvv": 121,
      "last_transaction_date": "2024-02-11",
      "last_transaction_total": 18.67,
      "last_transaction_uuid": "6390f7a1-d37a-3c55-b7f5-2553aad8c358"
    },
    {
      "uuid": "060874c4-eb77-3d28-81ab-c03f698b119a",
      "username": "andrew.erdman",
      "password_hash": "0a1fab6e0000cbbc677c1357f234235a",
      "first_name": "Carlotta",
      "last_name": "Goyette",
      "email": "herman.aryanna@gmail.com",
      "address": "540 O'Kon Tunnel\nKennedifort, WY 03464-6115",
      "phone": "320-480-1287",
      "credit_card_number": "3528857004845012",
      "credit_card_expiration": "2026-10-27",
      "credit_card_cvv": 230,
      "last_transaction_date": "2024-07-11",
      "last_transaction_total": 52.18,
      "last_transaction_uuid": "3046f8c6-1fc3-3c2a-a068-e27dea7a8148"
    },
    {
      "uuid": "46980ab3-0a59-37ba-8f28-34b32901c2b2",
      "username": "nikolaus.leopold",
      "password_hash": "5f33acd1bbaafe10566a83fe120a10be",
      "first_name": "Baron",
      "last_name": "Brakus",
      "email": "hayes.gerard@jerde.biz",
      "address": "875 Lydia Wells Apt. 896\nEarnestton, MI 95661",
      "phone": "+1.534.982.7306",
      "credit_card_number": "2686558226834665",
      "credit_card_expiration": "2027-01-14",
      "credit_card_cvv": 157,
      "last_transaction_date": "2024-01-06",
      "last_transaction_total": 15.77,
      "last_transaction_uuid": "6ef8e260-6b14-34cf-bbb1-38ff8b19e1e6"
    },
    {
      "uuid": "91a95ea8-61bb-30e9-99b4-c0b5407d2f66",
      "username": "qrippin",
      "password_hash": "cc2a6241b87d50fc22a553afaec5ca73",
      "first_name": "Leonora",
      "last_name": "Hirthe",
      "email": "bins.casey@gmail.com",
      "address": "108 Kiehn Club\nAntoinettebury, MO 40918",
      "phone": "+1-252-384-7725",
      "credit_card_number": "2310261236126412",
      "credit_card_expiration": "2027-03-13",
      "credit_card_cvv": 507,
      "last_transaction_date": "2024-02-11",
      "last_transaction_total": 7.32,
      "last_transaction_uuid": "952a0e91-71ce-3eac-82e2-a7603fc3106b"
    },
    {
      "uuid": "66a417f3-1ccb-35bc-af18-4bcb3a637c2a",
      "username": "kihn.claudie",
      "password_hash": "725aef1e9017b69cca6e12f72255243f",
      "first_name": "Ashlee",
      "last_name": "Cormier",
      "email": "cecile.olson@gmail.com",
      "address": "1797 Marvin Ports Apt. 854\nPort Eula, ME 38514-1890",
      "phone": "1-434-486-4082",
      "credit_card_number": "3528962643913591",
      "credit_card_expiration": "2025-07-21",
      "credit_card_cvv": 379,
      "last_transaction_date": "2024-04-03",
      "last_transaction_total": 17.97,
      "last_transaction_uuid": "e9f812ff-e444-38ee-9e9e-b8e23cbca0ca"
    },
    {
      "uuid": "44f6a3b7-9af9-32c5-8407-5734835ba3dc",
      "username": "lisa.fahey",
      "password_hash": "65a84ba1a7cf7c9b4a08aaf7c2f4fe97",
      "first_name": "Patsy",
      "last_name": "Jacobson",
      "email": "alessandra05@gmail.com",
      "address": "44660 Gorczany Inlet Suite 191\nEast Heloiseshire, MO 21273",
      "phone": "+15754035112",
      "credit_card_number": "3528972884581155",
      "credit_card_expiration": "2027-04-02",
      "credit_card_cvv": 125,
      "last_transaction_date": "2024-08-03",
      "last_transaction_total": 54.17,
      "last_transaction_uuid": "90b31a33-3058-3761-9f1e-e3b230a8a84e"
    },
    {
      "uuid": "ee9aa2fc-920d-3431-ae2f-995af9a315a0",
      "username": "koepp.danielle",
      "password_hash": "ad3669ec6f365667ae839bc7008c0ba2",
      "first_name": "Filomena",
      "last_name": "Schmidt",
      "email": "stark.shannon@yahoo.com",
      "address": "5999 Minnie Road Suite 350\nMillsburgh, KS 86248",
      "phone": "+16268278494",
      "credit_card_number": "2664046715992786",
      "credit_card_expiration": "2024-11-12",
      "credit_card_cvv": 776,
      "last_transaction_date": "2024-04-11",
      "last_transaction_total": 14.63,
      "last_transaction_uuid": "b2b72cbd-8dbb-3abf-a0a6-309e9aacc40f"
    },
    {
      "uuid": "02462a11-79b3-3ae9-8d2f-47a1ad946d52",
      "username": "zpacocha",
      "password_hash": "f3f3bb98848dbee797d8304d01104c5f",
      "first_name": "Leatha",
      "last_name": "DuBuque",
      "email": "sbahringer@herman.com",
      "address": "310 Daisy Summit\nGusikowskiland, IA 62422-9897",
      "phone": "+18068849067",
      "credit_card_number": "2356915641246058",
      "credit_card_expiration": "2027-07-10",
      "credit_card_cvv": 731,
      "last_transaction_date": "2024-05-02",
      "last_transaction_total": 57.75,
      "last_transaction_uuid": "cad4bc9d-1286-3370-92c6-1d0a1911c63a"
    },
    {
      "uuid": "c9545082-795c-39ca-b5d1-4c430468dbb1",
      "username": "bruen.chauncey",
      "password_hash": "bbedd39913ed0e1f08a0695eaeee5fe9",
      "first_name": "King",
      "last_name": "Will",
      "email": "fjacobi@gmail.com",
      "address": "718 Dickinson Alley Suite 072\nEast Nicole, WA 54107-5544",
      "phone": "(574) 927-1919",
      "credit_card_number": "5117490689958017",
      "credit_card_expiration": "2026-06-22",
      "credit_card_cvv": 787,
      "last_transaction_date": "2024-03-15",
      "last_transaction_total": 46.78,
      "last_transaction_uuid": "796bb71f-e3b7-3e77-8fbd-63cca0c6daec"
    },
    {
      "uuid": "eb3a4f7a-41cf-317b-8009-6ddfb420529c",
      "username": "pflatley",
      "password_hash": "c2901962257f08cb9be3c69de164b6a6",
      "first_name": "Kale",
      "last_name": "Kautzer",
      "email": "annalise56@tillman.com",
      "address": "31020 Connelly Harbors Apt. 493\nSouth Marjolainefort, NM 27236-3238",
      "phone": "+1.425.764.4640",
      "credit_card_number": "2573085298495866",
      "credit_card_expiration": "2027-08-03",
      "credit_card_cvv": 620,
      "last_transaction_date": "2024-01-25",
      "last_transaction_total": 52.69,
      "last_transaction_uuid": "10909c8d-f1e8-31fc-8338-8a47a9c6b085"
    }
  ]
]
```

## Build

To build the Docker image (with the amazing [FrankenPHP](https://github.com/dunglas/frankenphp)), run the following command:

```bash
make build
```

To push the Docker image to Docker Hub, run the following command:

```bash
make push
```

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.