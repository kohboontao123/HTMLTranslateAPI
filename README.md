
# Translate Api in Javascript

Seamlessly integrate API into your applications for instant, accurate translations across a variety of languages. Utilizing cutting-edge natural language processing, API empowers developers to enhance global communication, enabling users to effortlessly navigate and understand content in their preferred language. 


## Demo

![Demo](https://github.com/kohboontao123/HTMLTranslateAPI/blob/main/screenshot/demoGif.gif?raw=true)


## Installation

  1.   Download the file
  2.   Copy 'tranlate.php' in to the file
  3.  include the file with code
```bash
    <?php 
      include "translate.php"
    ?>
  ```

## Customize Language

```javascript
// Replace 'yourButtonID' with the actual ID of your button
document.getElementById("yourButtonID").addEventListener("click", function() {
    // Replace 'languageCode' with the desired language code
    setLanguage("languageCode");
});
```
For a list of language codes, refer to the [ISO Language Codes ](https://www.andiamo.co.uk/resources/iso-language-codes/)website.

Remember to replace `'yourButtonID'` with the actual ID of your button element, and `'languageCode'` with the desired language code based on the ISO language codes. For example, if you want to set the language to French, you would replace `'languageCode'` with `'fr'`.

Here's an example with a specific button ID and language code:

```javascript
document.getElementById("translateButton").addEventListener("click", function() {
    setLanguage("fr");
});
```

Make sure that the `setLanguage` function is defined elsewhere in your code, and it correctly handles changing the language based on the provided language code.


## Reference

[How TO - Google Translate](https://www.w3schools.com/howto/howto_google_translate.asp)
