<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Translation Example</title>
    <!-- Include the Google Translate API script -->
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>
    <div class="floating-button">
        <a class="language-link" href="#">
            <!-- You can replace this with your language icon -->
            <img src="images/icon-next.png" width="50" height="50" alt="Language Icon">
        </a>
        <div class="additional-buttons">
            <button class="language-button" id="malay-button"><img src="images/rounded-bm.png" width="50" height="50" alt="Language Icon"></button>
            <button class="language-button" id="english-button"><img src="images/rounded-en.png" width="50" height="50" alt="Language Icon"></button>
            <button class="language-button" id="mandarin-button"><img src="images/rounded-cn.png" width="50" height="50" alt="Language Icon"></button>
        </div>
    </div>

    <!-- Add a div for Google Translate widget to display -->
    <div id="google_translate_element"></div>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'ms', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT }, 'google_translate_element');
        }

        function setLanguage(languageCode) {
            var select = document.querySelector(".goog-te-combo");
            select.value = languageCode;
            select.dispatchEvent(new Event("change"));
        }

        document.getElementById("malay-button").addEventListener("click", function () {
            setLanguage("ms"); // Set language code for Malay
        });

        document.getElementById("english-button").addEventListener("click", function () {
            setLanguage("en"); // Set language code for English
        });
        document.getElementById("mandarin-button").addEventListener("click", function () {
            setLanguage("zh-CN"); // Set language code for Mandarin
        });
    </script>
</body>
</html>


<style>
#google_translate_element {
        display: none;
 }
.floating-button {
  position: fixed;
  left: 10px;
  top: 50%;
  transform: translateY(-50%);
  color: #fff;
  border: none;
  padding: 10px;
  cursor: pointer;
  border-radius: 5px;
  display: flex;
  flex-direction: column;
  align-items: center;
  z-index: 999;
}

.floating-button:hover .language-link img {
  display: none;
}

.language-link {
  display: block;
  text-decoration: none; /* Remove underlines for links */
}

.floating-button:hover .additional-buttons {
  display: flex;
  flex-direction: column;
  align-items: flex-end; /* Align the buttons to the right */
  margin-top: 10px;
}

.language-button {
  margin: 5px 0;
  display: none;
  padding: 5px 10px;
  border: none;
  border-radius: 20px;
  color: #000000;
  cursor: pointer;
  text-decoration: none;
}

.floating-button:hover .additional-buttons .language-button {
  display: inline-block;
}

.additional-buttons button {
  margin: 5px 0;
  display: none;
}

.floating-button:hover .additional-buttons button {
  display: block;
}

</style>
