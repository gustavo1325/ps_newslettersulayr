
<form>
    <fieldset>
        <legend></legend>
            <label for="nameNewsletter">{$psnewslettersulayr.customControls['PSNEWSLETTERSULAIR_NAME']['label']}</label>
            <input type="text" id="nameNewsletter" name="nameforNews" placeholder="name" required/>
            <label for="emailNewsletter">{$psnewslettersulayr.customControls['PSNEWSLETTERSULAIR_EMAIL']['label']}</label>
            <input type="email" id="emailNewsletter" name="mailforNews" placeholder="email" required/> 
            <input type="checkbox" id="politicsNewsletter" name="politicsforNews">
            <label for="politicsNewsletter">{$psnewslettersulayr.customControls['PSNEWSLETTERSULAIR_CONDITIONS']['label']}</label>
            <button  type="button">{$psnewslettersulayr.button['PSNEWSLETTERSULAIR_SUBMIT']['label']}</button>
    </fieldset>
</form>
    