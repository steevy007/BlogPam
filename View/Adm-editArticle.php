<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/Icones/20200719_214002.jpg" />
    <link rel="stylesheet" href="../assets/CSS/aos.css">
    <link rel="stylesheet" href="../assets/CSS/admsystem.css">
    <link rel="stylesheet" href="../assets/CSS/admsystem.css">
    <link rel="stylesheet" href="../assets/CSS/dropzone.css">
    <script src="https://kit.fontawesome.com/77e2f3b2cf.js" crossorigin="anonymous"></script>
    <title>BlogPam | Editer Article</title>
</head>

<body>


    <div class="adm-desktop">
        <div class="header-menu">
            <div class="hm1">
                <h4>BlogPam <span class="hk">Administration</span></h4>
            </div>
            <div class="hm2">
                <img src="../assets/Icones/icons8_Male_User_48px.png" alt=""> <span>Utilisateur Nom</span>
            </div>
        </div>
        <div class="adm-desk">
            <div class="menu-adm">
                <div class="nav-adm">
                    <ul>
                        <li><a id="wh" href="Adm-system.html">Statistique</a></li>
                        <li><a href="Adm-article.html">Article</a></li>
                        <li><a href="Adm-user.html">Utilisateur</a></li>
                    </ul>
                </div>
            </div>
            <div class="menu-block">
              
                <div class="wrapper">
                    <form action="" >
                        <div class="newPost">
                            <h3>Titre de l'article</h3>
                            <input type="text" placeholder="Enter title here">
                            <div class="file-upload">
                                <div class="file-select">
                                  <div class="file-select-button" id="fileName">Image de l'article</div>
                                  <div class="file-select-name" id="noFile">No file chosen...</div> 
                                  <input type="file" name="chooseFile" id="chooseFile">
                                </div>
                              </div>
                            <div class="toolbar">
                              <button type="button" data-func="bold"><i class="fa fa-bold"></i></button>
                              <button type="button" data-func="italic"><i class="fa fa-italic"></i></button>
                              <button type="button" data-func="underline"><i class="fa fa-underline"></i></button>
                              <button type="button" data-func="justifyleft"><i class="fa fa-align-left"></i></button>
                              <button type="button" data-func="justifycenter"><i class="fa fa-align-center"></i></button>
                              <button type="button" data-func="justifyright"><i class="fa fa-align-right"></i></button>
                              <button type="button" data-func="insertunorderedlist"><i class="fa fa-list-ul"></i></button>
                              <button type="button" data-func="insertorderedlist"><i class="fa fa-list-ol"></i></button>
                              <div class="customSelect">
                                <select data-func="fontname">
                                  <optgroup label="Serif Fonts">
                                    <option value="Bree Serif">Bree Serif</option>
                                    <option value="Georgia">Georgia</option>
                                     <option value="Palatino Linotype">Palatino Linotype</option>
                                    <option value="Times New Roman">Times New Roman</option>
                                  </optgroup>
                                  <optgroup label="Sans Serif Fonts">
                                    <option value="Arial">Arial</option>
                                    <option value="Arial Black">Arial Black</option>
                                    <option value="Asap" selected>Asap</option>
                                    <option value="Comic Sans MS">Comic Sans MS</option>
                                    <option value="Impact">Impact</option>
                                    <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                                    <option value="Tahoma">Tahoma</option>
                                    <option value="Trebuchet MS">Trebuchet MS</option>
                                    <option value="Verdana">Verdana</option>
                                  </optgroup>
                                  <optgroup label="Monospace Fonts">
                                    <option value="Courier New">Courier New</option>
                                    <option value="Lucida Console">Lucida Console</option>
                                  </optgroup>
                                </select>
                              </div>
                              <div class="customSelect">
                                <select data-func="formatblock">
                                  <option value="h1">Heading 1</option>
                                  <option value="h2">Heading 2</option>
                                  <option value="h4">Subtitle</option>
                                  <option value="p" selected>Paragraph</option>
                                </select>
                              </div>
                            </div>
                            <div class="editor" contenteditable></div>
                            <div class="buttons">
                              
                              <button type="submit" data-func="save" type="button">Enregistrer</button>
                             
                            </div>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <div class="none">
        <div class="adm-mobile">
            <div class="aff-error">
                <h1>Error</h1>
                <p class="fg">
                    Espace Administration disponible seulement sur pc
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, sit! Temporibus corrupti quidem
                    assumenda atque laboriosam. Perferendis debitis inventore harum ad eius sunt quasi, esse quia atque,
                    magni consequatur tempore?
                </p>

                <div>
                    <a href="">Page Accueil</a>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/JS/jquery.min.js"></script>
    <script src="../assets/JS/aos.js"></script>
    <script>
        AOS.init();
        $(document).ready(function () {
            scroller.init();
            $(".owl-carousel").owlCarousel({
                margin: 5,
                loop: true,
                autoWidth: true,
                items: 2
            });
        });
    </script>
<script src="../assets/JS/anCounter.js"></script>
</body>

</html>