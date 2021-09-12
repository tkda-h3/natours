<div class="book">
    <div class="book__form">
        <form action="#" class="form">
            <div class="u-margin-bottom-medium">
                <h2 class="heading-secondary">
                    お問い合わせ
                </h2>
            </div>

            <div class="form__group">
                <input type="text" class="form__input" placeholder="フルネーム" id="name" required>
                <label for="name" class="form__label">フルネーム</label>
            </div>

            <div class="form__group">
                <input type="email" class="form__input" placeholder="メールアドレス" id="email" required>
                <label for="email" class="form__label">メールアドレス</label>
            </div>

            <div class="form__group u-margin-bottom-medium">
                <div class="form__radio-group">
                    <input type="radio" class="form__radio-input" id="small" name="size">
                    <label for="small" class="form__radio-label">
                        <span class="form__radio-button"></span>
                        予約について
                    </label>
                </div>

                <div class="form__radio-group">
                    <input type="radio" class="form__radio-input" id="large" name="size">
                    <label for="large" class="form__radio-label">
                        <span class="form__radio-button"></span>
                        その他
                    </label>
                </div>
            </div>

            <div class="form__group">
                <textarea class="form__textarea" placeholder="お問い合わせ内容" id="content" row="40" col="18"
                    required></textarea>
                <label for="content" class="form__label">お問い合わせ内容</label>
            </div>

            <div class="form__group">
                <button class="btn btn--green">送信 &rarr;</button>
            </div>
        </form>
    </div>
</div>