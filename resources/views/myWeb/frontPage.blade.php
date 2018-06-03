@extends('layouts.master')
@push('header')
<!-- place holder -->
        <header>
            <h1>M.F.E is a Vegan. Why?</h1>
        </header>
@endpush
@push('module')
<!-- place holder -->
        <main>
            <h2 class='harvard'>Here are the Documentaries</h2>
            <figure>
                <figcaption><p class='harvard'>What the Health</p></figcaption>
                <a href="http://www.whatthehealthfilm.com/" target="_blank">
                    <img class="img10 aPng" src="images/whatTheHealth.jpg"
                    alt="What the Health: Direct or Netflix"/>
                </a>
            </figure>
            <figure>
                <figcaption><p class='harvard'>The Magic Pill</p></figcaption>
                <a href="https://www.netflix.com/title/80238655" target="_blank">
                    <img class="img10 aPng" src="images/theMagicPill.jpg"
                    alt="The Magic Pill: Netflix"/>
                </a>
            </figure>
            <figure>
                <figcaption><p class='harvard'>The C Word</p></figcaption>
                <a href="http://thecwordmovie.com/" target="_blank">
                    <img class="img10 aPng" src="images/theCWord.jpg"
                    alt="The C Word: Direct or Netflix"/>
                </a>
            </figure>
            <figure>
                <figcaption><p class='harvard'>In Search of Balance</p></figcaption>
                <a href="https://www.netflix.com/title/80164396" target="_blank">
                    <img class="img10 aPng" src="images/inSearchOfBalance.jpg"
                    alt="In Search of Balance Netflix"/>
                </a>
            </figure>
            <h2 class='harvard'>Here are the Questions</h2>
            <figure>
                <figcaption><p class='harvard'>Web Technologies</p></figcaption>
                <a href="images/webtechnologiescertificate.png" target="_blank">
                    <img class="img10 aPng" src="images/webtechnologiescertificate.png"
                        alt="MFE Harvard FAS DCE HES Web Technologies Certificate"/>
                </a>
            </figure>
        </main>
@endpush

@push('jsFiles')
<!-- place holder -->
        <script src="js/mfework.js"></script>
@endpush
