<amp-consent id="cookieConsent" layout="nodisplay">
    <script type="application/json">{
            "consentInstanceId": "consent-id",
            "consentRequired": true,
            "promptUI": "consentDialog",
            "postPromptUI": "post-consent-ui"
        }</script>
    <div id="consentDialog" class="cookies-footer">
        <div class="cookies-footer__container">
            <div class="cookies-footer__text">
                Мы используем cookies. Это позволяет нам анализировать взаимодействие посетителей с сайтом и делать его лучше. Продолжая пользоваться сайтом, вы даете согласие на <a href="/cookie" target="_blank" style="border-bottom: 1px dotted; cursor: pointer">обработку данных cookies</a>.
            </div>
            <button on="tap:cookieConsent.accept" class="cookies-footer__btn" type="button">Принять</button>
        </div>
    </div>
    <div style="display: none" id="post-consent-ui">
        <button on="tap:cookieConsent.prompt()">Update Consent</button>
    </div>
</amp-consent>