<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">    
    
    <title>bank</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <header>

        <!-- HEADER -->
        <div class="main">
            <div class="upper">
                <div class="logo">
                    <img src="images/Logo.png" alt="Logo">
                    <div class="title">
                        <h1>World Bank</h1>
                        <p>Publications</p>
                    </div>
                </div>
                <div class="telephone_number">
                    <p>8-800-100-5005</p>
                    <p>+7 (3452) 522 00</p>
                </div>
            </div>

            <!-- MENU -->
            <nav class="lower">
                <ul>
                    <li>Кредитные карты</li>
                    <li>Вклады</li>
                    <li>Страхование</li>
                    <li>Друзья</li>
                    <li>Интернет-банк</li>
                </ul>
            </nav>

        </div>
    </header>

    <main>
        <div class="main_upper">
            <div class="main_title">
                <p class="underline">Главная</p>-<p class="underline">Вклады</p>-<p>Калькулятор</p>
            </div>
            <div class="main_calc">
                <h1>Калькулятор</h1>
                <div class="calc_inner">

                    <!-- FORM-CALCULATOR-->
                    <form action="php/calc.php" class="calc_form" method="POST" id="form_id">
                        <div class="left_side">

                        <!-- ДАТА ОФОРМЛЕНИЯ ВКЛАДА -->
                        <div class="row">
                            <div class="col-50">
                                <div class="col-50">
                                    <label for="first">Дата оформления вклада</label>
                                </div>
                                <div class="col-50">
                                    <input type="date" name="deposit_date" class="calc_input" id="first">
                                </div>
                            </div>
                            <div class="col-50"></div>
                        </div>

                        <!-- СУММА ВКЛАДА -->
                        <div class="row">
                            <div class="col-50">
                                <div class="col-50">
                                    <label for="second">Сумма вклада</label>
                                </div>
                                <div class="col-50">
                                    <input type="number" name="deposit_amount" class="calc_input" id="second" min="1000" max="3000000">
                                </div>
                            </div>
                            <div class="col-50 span_range">


                                <input type="range" id="range1" class="row_range" min="1000" max="3000000">
                                <div class="span_text_range">
                                    <span>1000</span>
                                    <span>3000000</span>
                                </div>

                            </div>

                        </div>
                        <!-- СРОК ВКЛАДА -->
                        <div class="row">
                            <div class="col-50">
                                <div class="col-50">
                                    <label for="third">Срок вклада</label>
                                </div>
                                <div class="col-50">
                                    <select id="years" name="time_of_deposit">
                                        <option value="one">1 год</option>
                                        <option value="two">2 год</option>
                                        <option value="three">3 год</option>
                                        <option value="four">4 год</option>
                                        <option value="five">5 год</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-50"></div>
                        </div>

                        <!-- СУММА ПОПОЛНЕНИЯ ВКЛАДА -->
                        <div class="row">
                            <div class="col-50">
                                <div class="col-50">
                                    <label>Пополнение вклада</label>
                                </div>
                                <div class="col-50">
                                    <div class="radio">
                                        <input type="radio" name="yes_no" value="no" class="calc_input" id="fourth_no" checked>
                                        <label for="fourth_no">Нет</label>
                                        <input type="radio" name="yes_no" value="yes" class="calc_input" id="fourth_yes">
                                        <label for="fourth_yes">Да</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-50"></div>
                        </div>

                        <!-- сумма пополнения вклада -->
                        <div class="row">
                            <div class="col-50">
                                <div class="col-50">
                                    <label for="fifth">Сумма пополнения вклада</label>
                                </div>
                                <div class="col-50">
                                    <input type="number" name="deposit_amount_add" class="calc_input" id="fifth"  min="1000" max="3000000">
                                </div>

                            </div>
                            <div class="col-50 span_range">

                                <input type="range" class="row_range" id="range2" min="1000" max="3000000">
                                <div class="span_text_range">
                                    <span>1000</span>
                                    <span>3000000</span>
                                </div>

                            </div>

                        </div>
                        <!-- результат -->
                        <div class="row">
                            <div class="col-50">
                                <div class="col-50">
                                    <input type="submit" name="submit" value="Рассчитать">
                                </div>
                                <div class="col-50">
                                    <p id="result">Результат</p>
                                </div>
                            </div>

                        </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </main>

    <!-- footer -->
    <footer>
        <div class="main">
            <nav class="lower footer_lower">
                <ul>
                    <li>Кредитные карты</li>
                    <li>Вклады</li>
                    <li>Страхование</li>
                    <li>Друзья</li>
                    <li>Интернет-банк</li>
                </ul>
            </nav>
    </div>
    </footer>


</body>

</html>
