<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>

    <main>
        <div class="confirm__content">
            <div class="confirm__heading">
                <h2>Confirm</h2>
            </div>
            <form class="form" action="/contacts" method="post">
                @csrf
                <div class="confirm-table">
                    <table class="confirm-table__inner">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th>
                            <td class="confirm-table__text">
                                <input type="text" name="first_name" value="{{ $contact['first_name] }}" readonly/>
                                <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly/>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                            <td class="confirm__text">
                                <input type="radio" name="gender" value="{{ $contact['gender'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">メールアドレス</th>
                            <td class="confirm-table__text">
                                <input type="email" name="email" value="{{ $contact['email'] }}" readonly/>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header"></th>
                            <td class="confirm-table__text">
                                <input type="tel" name="tel1" value="{{ $contact['tel1'] }}" readonly/>
                                <input type="tel" name="tel2" value="{{ $contact['tel2'] }}" readonly/>
                                <input type="tel" name="tel3" value="{{ $contact['tel3'] }}" readonly/>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header"></th>
                            <td class="confirm-table__text">
                                <input type="text" name="address" value="{{ $contact['add'] }}" readonly/>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header"></th>
                            <td class="confirm-table__text">
                                <input type="text" name="building" value="{{ $contact['building'] }}" readonly/>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header"></th>
                            <td class="confirm-table__text">
                                <input type="text" name="select" value="{{ $contact ['select'] }}" readonly/>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header"></th>
                            <td class="confirm-table__text">
                                <input type="text" name="detail" value="{{ $contact ['detail'] }} " readonly/>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">送信</button>
                </div>
                <div class="form__button">
                    <a href="index.blade.php" class="form__button-onclick">修正</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>