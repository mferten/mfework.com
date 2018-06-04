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
            <h2 class='harvard'>Because</h2>
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
                <p class='harvard'>Whole Foods</p>
                <p class='titleColorTwo'>No Milk</p>
                <p class='harvard'>Meat</p>
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
                <p class='harvard'>Whole Foods</p>
                <p class='titleColorTwo'>Nature!</p>
                <p class='harvard'>Integration!</p>
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
            <ul class="ulListStyle">
                <li class='harvard'>- Milk is harmful -</li>
                <li class='harvard'>- Meat is harmful -</li>
                <li>
                    <a class='harvard' href="https://www.healthline.com/nutrition/legumes-good-or-bad" target="_blank">- Legume -&nbsp;</a>
                    <a  class='harvard' href="https://www.kitchenstewardship.com/monday-mission-sprout-something/" target="_blank">- harmful (?)</a>
                </li>
                <li class='harvard'>- Sugar harmful (?) -</li>
                <li>
                    <a class='harvard' href="https://www.scientificamerican.com/article/does-city-life-pose-a-risk-to-mental-health/" target="_blank">- City is harmful (?) -</a>
                </li>
            </ul>
        </main>
@endpush

@push('jsFiles')
<!-- place holder -->
        <script src="js/mfework.js"></script>
@endpush
