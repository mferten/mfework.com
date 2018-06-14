@extends('layouts.master')
@push('header')
<!-- place holder -->
        <header>
            <h1>Why is M.F.E a Vegan?</h1>
        </header>
@endpush
@push('module')
<!-- place holder -->
        <main>
            <section id="documentaries">
                <h2 class='harvard'><a class="harvard" href="docs/whyMFEIsAVegan.jpg" target="_blank">*** Because ***</a></h2>
                <figure>
                    <figcaption><p class='titleColorTwo'>What the Health</p></figcaption>
                    <a href="http://www.whatthehealthfilm.com/" target="_blank">
                        <img class="img8 aPng" src="images/whatTheHealth.jpg"
                        alt="What the Health: Direct or Netflix"/>
                    </a>
                    <p class='titleColorTwo'>Whole Foods</p>
                    <p class='harvard'>No Meat</p>
                    <p class='titleColorTwo'>No Milk</p>
                </figure>
                <figure>
                    <figcaption><p class='titleColorTwo'>The Magic Pill</p></figcaption>
                    <a href="https://www.netflix.com/title/80238655" target="_blank">
                        <img class="img8 aPng" src="images/theMagicPill.jpg"
                        alt="The Magic Pill: Netflix"/>
                    </a>
                    <p class='titleColorTwo'>Whole Foods</p>
                    <p class='harvard'>No Milk</p>
                    <p class='titleColorTwo'>Meat</p>
                </figure>
                <figure>
                    <figcaption><p class='titleColorTwo'>The C Word</p></figcaption>
                    <a href="http://thecwordmovie.com/" target="_blank">
                        <img class="img8 aPng" src="images/theCWord.jpg"
                        alt="The C Word: Direct or Netflix"/>
                    </a>
                    <p class='titleColorTwo'>Healthy Diet!</p>
                    <p class='harvard'>Excercise</p>
                    <p class='titleColorTwo'>No Toxin</p>
                </figure>
                <figure>
                    <figcaption><p class='titleColorTwo'>In Search of Balance</p></figcaption>
                    <a href="https://www.netflix.com/title/80164396" target="_blank">
                        <img class="img8 aPng" src="images/inSearchOfBalance.jpg"
                        alt="In Search of Balance Netflix"/>
                    </a>
                    <p class='titleColorTwo'>Whole Foods</p>
                    <p class='harvard'>Nature!</p>
                    <p class='titleColorTwo'>Integration!</p>
                </figure>
                <figure>
                    <figcaption><p class='titleColorTwo'>Evolution of Diet</p></figcaption>
                    <a href="https://www.nationalgeographic.com/foodfeatures/evolution-of-diet/" target="_blank">
                        <img class="img8 aPng" src="images/evolutionOfDiet.jpg" alt="Humans eat what, where, how?"/>
                    </a>
                    <p class='titleColorTwo'>What?</p>
                    <p class='harvard'>Where?</p>
                    <p class='titleColorTwo'>How?</p>
                </figure>
            </section>
            <!-- User Opinion -->
            <figure id="emailBox" class="displayNone">
                <img id="sendButton" class="threeRems" src="images/sendMail.jpg" alt="Send"/>
                <img id="clearButton" class="threeRems" src="images/clear.jpg" alt="Clear"/>
                <img id="returnButton" class="threeRems" src="images/return.jpg" alt="Return"/>
                <form id="SendMailModule" method="post">
                    <label for="mailText" class='harvard'>Please Enter Your Opinion</label>
                    <textarea class="img20 aPng" id="mailText" rows="15" cols="50"></textarea>
                    <p id="mailTextError" class="error"></p>
                </form>
            </figure>
            <ul class="ulListStyle">
                <li>
                    <a class='harvard' href="https://www.healthline.com/nutrition/legumes-good-or-bad" target="_blank">Legumes -</a>
                    <a class='harvard' href="https://paleoleap.com/beans-and-legumes/" target="_blank">Harmful ! &nbsp;-</a>
                    <a class='harvard' href="https://www.fda.gov/Food/FoodborneIllnessContaminants/Metals/ucm319948.htm" target="_blank">&nbsp;Arsenic in Rice !</a>
                </li>
                <li>
                    <a class='titleColorTwo' href="https://www.scientificamerican.com/article/does-city-life-pose-a-risk-to-mental-health/" target="_blank">- City is harmful (?) -</a>
                </li>
            </ul>
            <h2><a class="harvard" href="docs/whatAndHowToEat.jpg" target="_blank">*** What and How M.F.E. Eats ***</a></h2>
        </main>
@endpush

@push('jsFiles')
<!-- place holder -->
        <script src="js/mfework.js"></script>
@endpush
