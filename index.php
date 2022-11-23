<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="master.css">
    <title>User Dashboard</title>
</head>


<body>
    
    <div class="spl-headerContent">
        <div class="cico spl-headerImage" style="width:32px;height:32px;">
            <img height="32" width="32" src="foot.png" ;w=32&amp;h=32&amp;o=6&amp;dpr=1.3&amp;pid=SANGAM" alt=" " role="presentation" data-bm="56">
        </div>
        <div class="spl-headerText">
            <div class="spl-headerTitle">
                <h2 class="b_topTitle" id="menuTitleWrapper">Coupe du monde 2022</h2>
            </div>
            <div class="spl-headerSubTitle">
                Qatar 
            </div>
        </div>
    </div>
    <div class="tabs">
        <div class="tabs__sidebar">
            <button class="tabs__button tabs__button--active" data-for-tab="1">NOV 20, 2022</button>
            <button class="tabs__button" data-for-tab="2">NOV 21, 2022</button>
            <button class="tabs__button" data-for-tab="3">NOV 22, 2022</button>
        </div>
        <div class="tabs__content tabs__content--active" data-tab="1">
            <div class="match-card">
                <form action="process-form.php" method="post">
                <div class="flag-row">
                  <img width="40" height="40" src="Qatar.png" ;w=52&amp;h=52&amp;o=6&amp;dpr=1.3&amp;pid=SANGAM" alt="Logo of the Qatar" role="presentation" data-bm="25">
                  <span></span>
                  <img width="40" height="40" src="equador.png" ;w=52&amp;h=52&amp;o=6&amp;dpr=1.3&amp;pid=SANGAM" alt="Logo of the Qatar" role="presentation" data-bm="25">
                </div>
                <h4 class="match-title">Qatar<span>VS</span>Equateur</h4>
                <p>NOV 20, 2022, 17.00 AM</p>
                <label>Team1</label>
                <select class="selectBar" name="selectBar" id="selectBar">
                    <option value="default">Select</option>
                    <option value="Win">Win</option>
                    <option value="Draw">Draw</option>
                    <option value="Lose">Lose</option>
                </select>
                <input type="hidden" name="id" value="1">
    
                <label>Team2</label>
                <select class="selectBar" name="selectBar1" id="selectBar1">
                    <option value="default">Select</option>
                    <option value="Win">Win</option>
                    <option value="Draw">Draw</option>
                    <option value="Lose">Lose</option>
                </select>
                <button class="favorite_styled" style="color: black;">Save</button>
                </form>
            </div>
        </div>
        <div class="tabs__content" data-tab="2">
            <div class="match-card">
                <form action="process-form.php" method="post">
                <div class="flag-row">
                  <img width="40" height="40" src="ang.png" ;w=52&amp;h=52&amp;o=6&amp;dpr=1.3&amp;pid=SANGAM" alt="Logo of the Qatar" role="presentation" data-bm="25">
                  <span></span>
                  <img width="40" height="40" src="iran.png" ;w=52&amp;h=52&amp;o=6&amp;dpr=1.3&amp;pid=SANGAM" alt="Logo of the Qatar" role="presentation" data-bm="25">
                </div>
                <h4 class="match-title">Angleterre<span>VS</span>Iran</h4>
                <p>NOV 21, 2022, 14:00 </p>
                <label>Team1</label>
                <select class="selectBar" name="selectBar" id="selectBar">
                    <option value="default">Select</option>
                    <option value="Win">Win</option>
                    <option value="Draw">Draw</option>
                    <option value="Lose">Lose</option>
                </select>
                <input type="hidden" name="id" value="1">
    
                <label>Team2</label>
                <select class="selectBar" name="selectBar1" id="selectBar1">
                    <option value="default">Select</option>
                    <option value="Win">Win</option>
                    <option value="Draw">Draw</option>
                    <option value="Lose">Lose</option>
                </select>
                <button class="favorite_styled" style="color: black;">Save</button>
                </form>
            </div>
            <div class="match-card">
                <form action="process-form.php" method="post">
                <div class="flag-row">
                  <img width="40" height="40" src="sen.png" ;w=52&amp;h=52&amp;o=6&amp;dpr=1.3&amp;pid=SANGAM" alt="Logo of the Qatar" role="presentation" data-bm="25">
                  <span></span>
                  <img width="40" height="40" src="paybas.png" ;w=52&amp;h=52&amp;o=6&amp;dpr=1.3&amp;pid=SANGAM" alt="Logo of the Qatar" role="presentation" data-bm="25">
                </div>
                <h4 class="match-title">Sénégale<span>VS</span>Pays-Bas</h4>
                <p>NOV 21, 2022, 17:00 </p>
                <label>Team1</label>
                <select class="selectBar" name="selectBar" id="selectBar">
                    <option value="default">Select</option>
                    <option value="Win">Win</option>
                    <option value="Draw">Draw</option>
                    <option value="Lose">Lose</option>
                </select>
                <input type="hidden" name="id" value="1">
    
                <label>Team2</label>
                <select class="selectBar" name="selectBar1" id="selectBar1">
                    <option value="default">Select</option>
                    <option value="Win">Win</option>
                    <option value="Draw">Draw</option>
                    <option value="Lose">Lose</option>
                </select>
                <button class="favorite_styled" style="color: black;">Save</button>
                </form>
            </div>
            <div class="match-card">
                <form action="process-form.php" method="post">
                <div class="flag-row">
                  <img width="40" height="40" src="usa.png" ;w=52&amp;h=52&amp;o=6&amp;dpr=1.3&amp;pid=SANGAM" alt="Logo of the Qatar" role="presentation" data-bm="25">
                  <span></span>
                  <img width="40" height="40" src="galles.png" ;w=52&amp;h=52&amp;o=6&amp;dpr=1.3&amp;pid=SANGAM" alt="Logo of the Qatar" role="presentation" data-bm="25">
                </div>
                <h4 class="match-title">Etats-Unis<span>VS</span>Pays de Galles</h4>
                <p>NOV 21, 2022, 20:00 </p>
                <label>Team1</label>
                <select class="selectBar" name="selectBar" id="selectBar">
                    <option value="default">Select</option>
                    <option value="win">Win</option>
                    <option value="lose">Lose</option>
                </select>
                
                <label>Team2</label>
                <select class="selectBar" name="selectBar1" id="selectBar1">
                    <option value="default">Select</option>
                    <option value="win">Win</option>
                    <option value="lose">Lose</option>
                </select>
                <button class="favorite_styled" style="color: black;">Save</button>
                </form>
            </div>
        </div>
        <div class="tabs__content" data-tab="3">
            <div class="match-card">
                <form action="process-form.php" method="post">
                <div class="flag-row">
                  <img width="40" height="40" src="arge.png" ;w=52&amp;h=52&amp;o=6&amp;dpr=1.3&amp;pid=SANGAM" alt="Logo of the Qatar" role="presentation" data-bm="25">
                  <span></span>
                  <img width="40" height="40" src="saud.png" ;w=52&amp;h=52&amp;o=6&amp;dpr=1.3&amp;pid=SANGAM" alt="Logo of the Qatar" role="presentation" data-bm="25">
                </div>
                <h4 class="match-title">Argentine<span>VS</span>Arabie Saoudite</h4>
                <p>NOV 22, 2022, 11:00 </p>
                <label>Team1</label>
                <select class="selectBar" name="selectBar" id="selectBar">
                    <option value="default">Select</option>
                    <option value="win">Win</option>
                    <option value="lose">Lose</option>
                </select>
                
                <label>Team2</label>
                <select class="selectBar" name="selectBar1" id="selectBar1">
                    <option value="default">Select</option>
                    <option value="win">Win</option>
                    <option value="lose">Lose</option>
                </select>
                <button class="favorite_styled" style="color: black;">Save</button>
                </form>
            </div>
            <div class="match-card">
                <form action="process-form.php" method="post">
                <div class="flag-row">
                  <img width="40" height="40" src="denmark.png" ;w=52&amp;h=52&amp;o=6&amp;dpr=1.3&amp;pid=SANGAM" alt="Logo of the Qatar" role="presentation" data-bm="25">
                  <span></span>
                  <img width="40" height="40" src="tunis.png" ;w=52&amp;h=52&amp;o=6&amp;dpr=1.3&amp;pid=SANGAM" alt="Logo of the Qatar" role="presentation" data-bm="25">
                </div>
                <h4 class="match-title">Etats-Unis<span>VS</span>Pays de Galles</h4>
                <p>NOV 22, 2022, 14:00 </p>
                <label>Team1</label>
                <select class="selectBar" name="selectBar" id="selectBar">
                    <option value="default">Select</option>
                    <option value="win">Win</option>
                    <option value="lose">Lose</option>
                </select>
                
                <label>Team2</label>
                <select class="selectBar" name="selectBar1" id="selectBar1">
                    <option value="default">Select</option>
                    <option value="win">Win</option>
                    <option value="lose">Lose</option>
                </select>
                <button class="favorite_styled" style="color: black;">Save</button>
                </form>
            </div>
            <div class="match-card">
                <form action="process-form.php" method="post">
                <div class="flag-row">
                  <img width="40" height="40" src="mexique.png" ;w=52&amp;h=52&amp;o=6&amp;dpr=1.3&amp;pid=SANGAM" alt="Logo of the Qatar" role="presentation" data-bm="25">
                  <span></span>
                  <img width="40" height="40" src="pologne.png" ;w=52&amp;h=52&amp;o=6&amp;dpr=1.3&amp;pid=SANGAM" alt="Logo of the Qatar" role="presentation" data-bm="25">
                </div>
                <h4 class="match-title">Mexique<span>VS</span>Pologne</h4>
                <p>NOV 22, 2022, 17:00 </p>
                <label>Team1</label>
                <select class="selectBar" name="selectBar" id="selectBar">
                    <option value="default">Select</option>
                    <option value="win">Win</option>
                    <option value="lose">Lose</option>
                </select>
                
                <label>Team2</label>
                <select class="selectBar" name="selectBar1" id="selectBar1">
                    <option value="default">Select</option>
                    <option value="win">Win</option>
                    <option value="lose">Lose</option>
                </select>
                <button class="favorite_styled" style="color: black;">Save</button>
                </form>
            </div>
            <div class="match-card">
                <form action="process-form.php" method="post">
                <div class="flag-row">
                  <img width="40" height="40" src="france.png" ;w=52&amp;h=52&amp;o=6&amp;dpr=1.3&amp;pid=SANGAM" alt="Logo of the Qatar" role="presentation" data-bm="25">
                  <span></span>
                  <img width="40" height="40" src="australie.png" ;w=52&amp;h=52&amp;o=6&amp;dpr=1.3&amp;pid=SANGAM" alt="Logo of the Qatar" role="presentation" data-bm="25">
                </div>
                <h4 class="match-title">France<span>VS</span>Australie</h4>
                <p>NOV 22, 2022, 20:00 </p>
                <label>Team1</label>
                <select class="selectBar" name="selectBar" id="selectBar">
                    <option value="default">Select</option>
                    <option value="win">Win</option>
                    <option value="lose">Lose</option>
                </select>
                
                <label>Team2</label>
                <select class="selectBar" name="selectBar1" id="selectBar1">
                    <option value="default">Select</option>
                    <option value="win">Win</option>
                    <option value="lose">Lose</option>
                </select>
                <button class="favorite_styled" style="color: black;">Save</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function setupTabs () {
            document.querySelectorAll(".tabs__button").forEach(button => {
                button.addEventListener("click", () => {
                    const sideBar = button.parentElement;
                    const tabsContainer = sideBar.parentElement;
                    const tabNumber = button.dataset.forTab;
                    const tabToActivate = tabsContainer.querySelector(`.tabs__content[data-tab="${tabNumber}"]`);
                    
                    sideBar.querySelectorAll(".tabs__button").forEach(button => {
                        button.classList.remove("tabs__button--active");
                    });

                    tabsContainer.querySelectorAll(".tabs__content").forEach(tab => {
                        tab.classList.remove("tabs__content--active");
                    });

                    button.classList.add("tabs__button--active");
                    tabToActivate.classList.add("tabs__content--active");
                });
            });
        }

        document.addEventListener("DOMContentLoaded", () => {
            setupTabs();
        })
    </script>

    <div class="favorite_styled">
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>

</body>