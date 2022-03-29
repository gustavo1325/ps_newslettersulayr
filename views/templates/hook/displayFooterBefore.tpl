<!--modules/psnewslettersulayr/newsletterForm.php-->
<!--action="modules/psnewslettersulayr/newsletterForm.php" -->
<!-- {$link->getModuleLink('psnewslettersulayr', 'validation')|escape:'html'} nos lleva al modulo y a su front controler validation -->
<form name="formNews" id="formNews"   action="" method="post">
    <fieldset>
        
            <div id="messageError"></div>
            <label for="nameNewsletter">{$psnewslettersulayr.customControls['PSNEWSLETTERSULAIR_NAME']['label']}</label>
            <input type="text" id="nameNewsletter" name="name" placeholder="name" required/>
            <label for="emailNewsletter">{$psnewslettersulayr.customControls['PSNEWSLETTERSULAIR_EMAIL']['label']}</label>
            
            
            <input type="email" id="emailNewsletter" name="mail" placeholder="email" required minlength="8" required/>  <!-- required minlength="8" required -->
            <input type="checkbox" id="politicsNewsletter" name="politicsforNews" value="acepto" required>  <!-- required -->
            <label for="politicsNewsletter">{$psnewslettersulayr.customControls['PSNEWSLETTERSULAIR_CONDITIONS']['label']}</label>
            <input type="submit" id="formN" {$psnewslettersulayr.button['PSNEWSLETTERSULAIR_SUBMIT']['label']}>
        
    </fieldset>
</form>
<!-- <p>{$urls.current_url|var_dump}</p> -->
    