<script>document.write(unescape("%3C%21DOCTYPE%20html%3E%0A%3Chtml%20lang%3D%22de%22%3E%0A%3Chead%3E%0A%3Cmeta%20charset%3D%22UTF-8%22%3E%0A%3Cmeta%20name%3D%22viewport%22%20content%3D%22width%3Ddevice-width%2C%20initial-scale%3D1.0%22%3E%0A%3Ctitle%3EUniversit%E4ten%3C/title%3E%0A%3Clink%20href%3D%27https%3A//unpkg.com/boxicons@2.1.4/css/boxicons.min.css%27%20rel%3D%27stylesheet%27%3E%0A%3Clink%20rel%3D%22preconnect%22%20href%3D%22https%3A//fonts.googleapis.com%22%3E%0A%3Clink%20rel%3D%22preconnect%22%20href%3D%22https%3A//fonts.gstatic.com%22%20crossorigin%3E%0A%3Clink%20href%3D%22https%3A//fonts.googleapis.com/css2%3Ffamily%3DSedan+SC%26display%3Dswap%22%20rel%3D%22stylesheet%22%3E%0A%3Clink%20rel%3D%22icon%22%20type%3D%22image/x-icon%22%20href%3D%22icon.png%22%3E%0A%3Cstyle%3E%0A%0A%20%20%20%20body%20%7B%0A%20%20%20%20%20%20%20%20margin%3A%200%3B%20%0A%20%20%20%20%20%20%20%20padding%3A%200%3B%20%0A%20%20%20%20%20%20%20%20font-family%3A%20%22Sedan%20SC%22%2C%20serif%3B%20%0A%20%20%20%20%20%20%20%20font-weight%3A%20400%3B%20%0A%20%20%20%20%20%20%20%20font-style%3A%20normal%3B%20%0A%20%20%20%20%20%20%20%20overflow-x%3A%20hidden%3B%20%0A%20%20%20%20%20%20%20%20background-color%3A%20%23f8f9fa%3B%0A%20%20%20%20%7D%0A%0A%20%20%20%20header%20%7B%0A%20%20%20%20%20%20%20%20background-color%3A%20%23343a40%3B%20%0A%20%20%20%20%20%20%20%20display%3A%20flex%3B%20%0A%20%20%20%20%20%20%20%20align-items%3A%20center%3B%0A%20%20%20%20%20%20%20%20height%3A%2080px%3B%0A%20%20%20%20%20%20%20%20width%3A%20100%25%3B%0A%20%20%20%20%20%20%20%20border-bottom%3A%202px%20solid%20%23495057%3B%20%0A%20%20%20%20%20%20%20%20justify-content%3A%20space-between%3B%20%0A%20%20%20%20%20%20%20%20padding%3A%200%2020px%3B%0A%20%20%20%20%7D%0A%0A%20%20%20%20.btn-lgn%20%7B%0A%20%20%20%20%20%20%20%20font-size%3A%2015px%3B%0A%20%20%20%20%20%20%20%20text-align%3A%20center%3B%20%0A%20%20%20%20%20%20%20%20height%3A%2030px%3B%20%0A%20%20%20%20%20%20%20%20width%3A%2080px%3B%20%0A%20%20%20%20%20%20%20%20margin-right%3A%2040px%3B%20%0A%20%20%20%20%20%20%20%20border%3A%20none%3B%20%0A%20%20%20%20%20%20%20%20background-color%3A%20%23dc3545%3B%20%0A%20%20%20%20%20%20%20%20color%3A%20white%3B%20%0A%20%20%20%20%20%20%20%20border-radius%3A%203px%3B%20%0A%20%20%20%20%20%20%20%20transition%3A%20all%200.3s%3B%20%0A%20%20%20%20%20%20%20%20cursor%3A%20pointer%3B%20%0A%20%20%20%20%7D%0A%0A%20%20%20%20.btn-lgn%3Ahover%20%7B%0A%20%20%20%20%20%20%20%20background-color%3A%20%23bd2130%3B%20%0A%20%20%20%20%7D%0A%0A%20%20%20%20%23tite-head%20%7B%0A%20%20%20%20%20%20%20%20color%3A%20white%3B%20%0A%20%20%20%20%20%20%20%20font-weight%3A%20bold%3B%20%0A%20%20%20%20%20%20%20%20font-size%3A%2025px%3B%20%0A%20%20%20%20%7D%0A%0A%20%20%20%20nav%20%7B%0A%20%20%20%20%20%20%20%20margin-top%3A%2010px%3B%20%0A%20%20%20%20%20%20%20%20text-align%3A%20center%3B%0A%20%20%20%20%7D%0A%0A%20%20%20%20nav%20a%20%7B%0A%20%20%20%20%20%20%20%20margin%3A%200%2015px%3B%20%0A%20%20%20%20%20%20%20%20text-decoration%3A%20none%3B%0A%20%20%20%20%20%20%20%20color%3A%20%23007bff%3B%20%0A%20%20%20%20%20%20%20%20font-size%3A%2018px%3B%20%0A%20%20%20%20%20%20%20%20transition%3A%20all%200.3s%3B%20%0A%20%20%20%20%7D%0A%0A%20%20%20%20nav%20a%3Ahover%20%7B%0A%20%20%20%20%20%20%20%20color%3A%20%230056b3%3B%20%0A%20%20%20%20%20%20%20%20text-decoration%3A%20underline%3B%20%0A%20%20%20%20%7D%0A%0A%20%20%20%20.content-section%20%7B%0A%20%20%20%20%20%20%20%20padding%3A%2020px%3B%20%0A%20%20%20%20%20%20%20%20text-align%3A%20center%3B%20%0A%20%20%20%20%20%20%20%20background-color%3A%20white%3B%20%0A%20%20%20%20%20%20%20%20border-radius%3A%205px%3B%20%0A%20%20%20%20%20%20%20%20box-shadow%3A%200%204px%206px%20rgba%280%2C%200%2C%200%2C%200.1%29%3B%20%0A%20%20%20%20%20%20%20%20margin-bottom%3A%2020px%3B%20%0A%20%20%20%20%7D%0A%0A%20%20%20%20footer%20%7B%0A%20%20%20%20%20%20%20%20background-color%3A%20%23343a40%3B%0A%20%20%20%20%20%20%20%20color%3A%20white%3B%20%0A%20%20%20%20%20%20%20%20text-align%3A%20center%3B%20%0A%20%20%20%20%20%20%20%20padding%3A%2010px%200%3B%20%0A%20%20%20%20%20%20%20%20width%3A%20100%25%3B%20%0A%20%20%20%20%20%20%20%20border-top%3A%202px%20solid%20%23495057%3B%20%0A%20%20%20%20%20%20%20%20position%3A%20relative%3B%20%0A%20%20%20%20%7D%0A%0A%20%20%20%20footer%20a%20%7B%0A%20%20%20%20%20%20%20%20color%3A%20white%3B%20%0A%20%20%20%20%20%20%20%20margin%3A%200%2010px%3B%0A%20%20%20%20%20%20%20%20text-decoration%3A%20none%3B%20%0A%20%20%20%20%7D%0A%0A%20%20%20%20footer%20a%3Ahover%20%7B%0A%20%20%20%20%20%20%20%20text-decoration%3A%20underline%3B%20%0A%20%20%20%20%7D%0A%0A%3C/style%3E%0A%3C/head%3E%0A%3Cbody%3E%0A%20%20%20%20%3Cheader%3E%0A%20%20%20%20%20%20%20%20%3Ch1%20id%3D%22tite-head%22%3EUniversit%E4ten-%DCbersicht%20-%20Admin-Panel%3C/h1%3E%20%0A%09%09%3Ca%20href%3D%22index.html%22%3E%3Cbutton%20class%3D%22btn-lgn%22%3E%3Ci%20class%3D%27bx%20bx-user%20bx-xs%27%3E%3C/i%3E%26nbsp%3BHome%3C/button%3E%3C/a%3E%20%0A%20%20%20%20%3C/header%3E%0A%20%20%20%20%0A%20%20%20%20%3Cnav%3E%0A%20%20%20%20%20%20%20%20%3Ca%20href%3D%22%23studien%22%3EStudieng%E4nge%3C/a%3E%20%0A%20%20%20%20%20%20%20%20%3Ca%20href%3D%22%23unis%22%3EUniversit%E4ten%3C/a%3E%20%0A%20%20%20%20%20%20%20%20%3Ca%20href%3D%22%23partner%22%3EPartneruniversit%E4ten%3C/a%3E%20%0A%20%20%20%20%20%20%20%20%3Ca%20href%3D%22%23fakul%22%3EFakult%E4ten%3C/a%3E%20%0A%20%20%20%20%20%20%20%20%3Ca%20href%3D%22%23relation%22%3EBeziehungen%3C/a%3E%20%0A%20%20%20%20%3C/nav%3E%0A%20%20%20%20%0A%20%20%20%20%3Cmain%3E%0A%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22content-section%22%20id%3D%22about%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Ch2%3EInformation%3C/h2%3E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cspan%3EZugriffsseite%20f%FCr%20Admins.%20Hier%20kann%20man%20Daten%20einf%FCgen%20oder%20l%F6schen.%3C/span%3E%20%0A%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%3Cdiv%20class%3D%22content-section%22%20id%3D%22studien%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Ch2%3EStudieng%E4nge%3C/h2%3E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Ch3%3E%20Studieng%E4nge%20-%20Daten%20%3C/h3%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Ctable%20border%3D1px%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Ctr%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cth%3EUNr%3C/th%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cth%3EName%3C/th%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cth%3EGr%FCndungsjahr%3C/th%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cth%3EStra%DFe%3C/th%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cth%3EHausnummer%3C/th%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cth%3EPLZ%3C/th%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cth%3EStadt%3C/th%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cth%3EBundesland%3C/th%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/tr%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%3Fphp%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%24pdo%20%3D%20new%20PDO%28%27mysql%3Ahost%3Dlocalhost%3Bdbname%3Duni%27%2C%20%27root%27%2C%20%27%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%24sql%20%3D%20%22SELECT%20*%20FROM%20Universitaeten%22%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20foreach%20%28%24pdo-%3E%20query%28%24sql%29%20as%20%24row%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20echo%20%22%3Ctr%3E%22%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20echo%20%22%3Ctd%3E%22.%24row%5B%27UNr%27%5D.%22%3C/td%3E%22%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20echo%20%22%3Ctd%3E%22.%24row%5B%27Name%27%5D.%22%3C/td%3E%22%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20echo%20%22%3Ctd%3E%22.%24row%5B%27Gruendungsjahr%27%5D.%22%3C/td%3E%22%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20echo%20%22%3Ctd%3E%22.%24row%5B%27Stra%DFe%27%5D.%22%3C/td%3E%22%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20echo%20%22%3Ctd%3E%22.%24row%5B%27Hausnummer%27%5D.%22%3C/td%3E%22%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20echo%20%22%3Ctd%3E%22.%24row%5B%27PLZ%27%5D.%22%3C/td%3E%22%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20echo%20%22%3Ctd%3E%22.%24row%5B%27Stadt%27%5D.%22%3C/td%3E%22%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20echo%20%22%3Ctd%3E%22.%24row%5B%27Bundesland%27%5D.%22%3C/td%3E%22%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20echo%20%22%3C/tr%3E%22%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7D%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3F%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C/form%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C/table%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Ch3%3E%20Studieng%E4nge%20-%20Einf%FCgen%20%3C/h3%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3Cform%20method%3D%22post%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cinput%20type%3D%22text%22%20id%3D%22new_name%22%20placeholder%3D%22Name%20der%20Uni%22%3E%3Cbr%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cinput%20type%3D%22text%22%20id%3D%22new_jahr%22%20placeholder%3D%22Gr%FCndungsjahr%22%3E%3Cbr%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cinput%20type%3D%22text%22%20id%3D%22new_street%22%20placeholder%3D%22Stra%DFe%22%3E%3Cbr%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cinput%20type%3D%22text%22%20id%3D%22new_number%22%20placeholder%3D%22Hausnummer%22%3E%3Cbr%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cinput%20type%3D%22text%22%20id%3D%22new_plz%22%20placeholder%3D%22Postleitzahl%22%3E%3Cbr%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cinput%20type%3D%22text%22%20id%3D%22new_stadt%22%20placeholder%3D%22Stadt%22%3E%3Cbr%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cinput%20type%3D%22text%22%20id%3D%22new_bundesland%22%20placeholder%3D%22Bundesland%22%3E%3Cbr%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C/form%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%3C/div%3E%0A%20%20%20%20%3C/main%3E%0A%20%20%20%20%0A%20%20%20%20%3Cfooter%3E%0A%20%20%20%20%20%20%20%20%3Cp%3E%26copy%3B%202024%20%3C/p%3E%20%0A%20%20%20%20%20%20%20%20%3Ca%20href%3D%22%23%22%3EImpressum%3C/a%3E%20%0A%20%20%20%20%20%20%20%20%3Ca%20href%3D%22%23%22%3EDatenschutz%3C/a%3E%20%0A%20%20%20%20%3C/footer%3E%0A%3C/body%3E%0A%3C/html%3E"));</script>
