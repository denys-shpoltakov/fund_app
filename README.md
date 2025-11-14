# fund_app
Aplikacja do zarządzania finansami

## Opis

Projekt ma na celu zarządzanie finansami użytkowników.
Obsługuje rejestrację, autoryzację, przeglądanie salda i ochronę.

## Instalacja

1. Sklonuj repozytorium:

```bash
https://github.com/denys-shpoltakov/fund_app.git
```

2. Przejdź do folderu projektu

```bash
cd fund_app
```

3. Otwórz XAMPP i włącz MYSQL & Apache
<br>
4. Skonfiguruj bazę danych

- Przejdź do strony http://localhost/phpmyadmin
- Utwórz bazę danych o nazwie schema
- Zrobić import bazy danych z folderu sql Plik schema.sql


## Korzystanie / Usage

### Rejestracja / register

![Strona rejestracji](https://github.com/denys-shpoltakov/fund_app/blob/2e5505fe64609bcd11592919c1240d34495cf272/screenshots/register.png)

- Otwórz w przeglądarce `http://localhost/fund_app/public/register.php`
- Wprowadź Imię, Nazwisko, E-mail, awatar (Opcjonalnie) i hasło
- Po pomyślnej rejestracji otworzy się strona z autoryzacją, na której musisz wprowadzić adres e-mail i hasło

### autoryzacja / auth
![Strona autoryzacji](https://github.com/denys-shpoltakov/fund_app/blob/0683ce20a8836458531a92709a85e540aed5741f/screenshots/login.png)

- Otwórz w przeglądarce `http://localhost/fund_app/public/index.php`
- Wprowadź e-mail i hasło
- Po udanej autoryzacji otworzy się panel użytkownika (Dashboard)

### Profil użytkownika / User profile

![Profil użytkownika](https://github.com/denys-shpoltakov/fund_app/blob/0e46f611170dd83768baef4cfdb7e639e7ae8692/screenshots/dashboard.png)

Na profilu użytkownika można obejrzeć:

- Imię
- Nazwisko
- Email
- Zdjęcia użytkownika
- Bilans

Istnieje również menu nawigacyjne, które zawiera:

- Profil (Home)
- Zasilić depozyt - strona doładowania
- Wypłata środków - strona wypłaty
- Wyjście-wylogowanie z konta

### Zasilić depozyt / Deposit top-up

![Zasilić depozyt](https://github.com/denys-shpoltakov/fund_app/blob/2fa53d3b56aaf448a2d6f77d39ed3400b4b24df9/screenshots/deposit.png)

Na tej stronie możesz wykonać symulację doładowania

Aby to zrobić, musisz:

- Podać kwotę doładowania i nacisnąć przycisk Dodaj wkład

Następnie otworzy się strona profilu, a jeśli wszystko zostało uzupełnione bez błędów, informacje o użytkowniku będą napisane, że saldo zostało pomyślnie uzupełnione.

### Wypłata środków / Withdrawal page

![Wypłata środków](https://github.com/denys-shpoltakov/fund_app/blob/2fa53d3b56aaf448a2d6f77d39ed3400b4b24df9/screenshots/widthdraw.png)

Na tej stronie można dokonać wypłaty

Aby to zrobić, musisz:

- Określić kwotę do wypłaty i nacisnąć przycisk Dodaj wkład

Jeśli podasz kwotę 0 lub niższą niż 0, wystąpi błąd, saldo nie zostanie obniżone. Jeśli wszystko jest w porządku, środki zostaną odpisane.

### Wyjście

Jeśli klikniesz w menu nawigacyjnym przycisk Wyjdź, przeniesie Cię na stronę index.php (login) i trzeba będzie dokonać ponownego logowania.

### Zmiana motywu na ciemny

Witryna ma przycisk w menu nawigacyjnym, który pozwala zmienić motyw. Przeglądarka zapamiętuje wybór użytkownika za pomocą localStorage. Po odświeżeniu strony wybór zostanie zapamiętany.

## Ochrona

### Brute-force

Na tej stronie znajduje się brute-force Ochrona. Jeśli zaczniesz próbować znaleźć hasło, po 5 nieprawidłowych próbach otrzymasz blokadę IP na 15 minut.

![brute-force photo](https://github.com/denys-shpoltakov/fund_app/blob/2fa53d3b56aaf448a2d6f77d39ed3400b4b24df9/screenshots/brute-force.png)

### Obejście rejestracji / autoryzacji za pomocą adresu URL

Nie można przejść do strony profilu (dashboard.php) jeśli użytkownik nie jest zalogowany lub zarejestrowany.

Nie można przejść do strony rejestracji/autoryzacji, jeśli użytkownik jest zalogowany.

## SQL-injection (wstrzykiwania)

Projekt nie jest podatny na iniekcje SQL.

W signin.php używa takiej konstrukcji:

```$stmt = $connect->prepare("SELECT ... WHERE email = ? AND password = ?");```

Prepared statements, całkowicie blokują SQL wstrzykiwania
 
## Technology stack

Języki programowania:
Podstawowa logika:
- PHP 8

Zmiana tematu:
- JavaScript

Baza Dannych:
- MySQL

Do pracy z serwerem:
- XAMPP

Znaczniki i style:
- HTML & CSS

## Wkład / Сontribution

Jeśli chcesz pomóc w projekcie:
- Stwórz swój oddział: ```bash git checkout -b feature-branch```
- Dokonaj zmian i commit: ```bash git commit -m "Add new feature"```
- Wyślij Pull Request

## Licencja

Ten projekt jest licencjonowany na licencji MIT.
