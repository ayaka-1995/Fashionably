<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA=Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <!-- googleフォントからInikaの適用 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&family=Noto+Serif+JP:wght@900&display=swap" rel="stylesheet">
    <!-- ここまで -->
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
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text__divide2">
                            <input type="text" name="first_name" placeholder="例:山田" />
                            <input type="text" name="last_name" placeholder="例:太郎" />
                        </div>
                        <div class="form__error">

                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class=form__group-title>
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--radio">
                            <label>
                                <input type="radio" name="gender" value="male">男性
                            </label>
                            <label>
                                <input type="radio" name="gender" value="female">女性
                            </label>
                            <label>
                                <input type="radio" name="gender" value="other">その他
                            </label>
                        </div>
                        <div class="form__error">

                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="例:text@example.com">
                        </div>
                        <div class="form__error">

                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label-item">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text__divide3">
                            <input type="tel" name="tel1" maxlength="3" placeholder="080" />
                            <input type="tel" name="tel2" maxlength="4" placeholder="1234" />
                            <input type="tel" name="tel3" maxlength="4" placeholder="5678" />
                        </div>
                        <div class="form_error">

                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
                        </div>
                        <div class="form__error">

                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" />
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class=form__select>
                            <select name="select">
                                <option value="delivery">商品のお届けについて</option>
                                <option value="exchange">商品の交換について</option>
                                <option value="trouble">商品のトラブル</option>
                                <option value="inquiry">ショップへのお問い合わせ</option>
                                <option value="other">その他</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__label--title">
                        <span class="form__label--item">お問い合わせ内容</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="detail" placeholder="届いた商品が注文した商品ではありませんでした。商品の取り替えをお願いします。"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>