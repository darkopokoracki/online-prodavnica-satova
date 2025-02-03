<script setup>
import UserLayouts from "./Layouts/UserLayouts.vue";
</script>

<template>

<UserLayouts  :fullName="fullName" :emailAddress="emailAddress">
    <div
        class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0"
    >
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <svg
                class="absolute top-0 left-[max(50%,25rem)] h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]"
                aria-hidden="true"
            >
                <defs>
                    <pattern
                        id="e813992c-7d03-4cc4-a2bd-151760b470a0"
                        width="200"
                        height="200"
                        x="50%"
                        y="-1"
                        patternUnits="userSpaceOnUse"
                    >
                        <path d="M100 200V.5M.5 .5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                    <path
                        d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z"
                        stroke-width="0"
                    />
                </svg>
                <rect
                    width="100%"
                    height="100%"
                    stroke-width="0"
                    fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)"
                />
            </svg>
        </div>
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10"
        >
            <div
                class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8"
            >
                <div class="lg:pr-4">
                    <div class="lg:max-w-lg">
                        <p class="text-base/7 font-semibold text-indigo-600">
                            Darko Satovi
                        </p>
                        <h1
                            class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl"
                        >
                            O nama
                        </h1>
                        <p class="mt-6 text-xl/8 text-gray-700">
                            Darko Satovi je prodavnica satova koja je nastala 2024. godine sa ciljem da pruži kvalitetne i stilizovane satove za sve ljubitelje ovog dodatka. Od samog osnivanja, trudimo se da našim kupcima ponudimo širok izbor modela koji kombinuju moderni dizajn i pouzdanost. Sada, uz našu fizičku prodavnicu, imamo i mogućnost online kupovine, kako bismo bili još bliži vašim potrebama.
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="-mt-12 -ml-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden"
            >
                <img
                    class="w-[48rem] max-w-none rounded-xl bg-gray-900 ring-1 shadow-xl ring-gray-400/10 sm:w-[57rem]"
                    src="https://images.pexels.com/photos/12163561/pexels-photo-12163561.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt=""
                />
            </div>
            <div
                class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8"
            >
                <div class="lg:pr-4">
                    <div class="max-w-xl text-base/7 text-gray-700 lg:max-w-lg">
                        <p>
                            Darko Satovi je osnovan 2024. godine sa vizijom da pruži kvalitetne i stilizovane satove za sve ljubitelje ovog dodatka. Naša misija je da spojimo moderni dizajn sa vrhunskom funkcionalnošću, pružajući kupcima satove koji istovremeno ističu stil i pouzdanost. Sa širokim asortimanom modela, od klasičnih do savremenih, trudimo se da zadovoljimo različite ukuse i potrebe. Uz fizičku prodavnicu, sada nudimo i mogućnost online kupovine, čime smo dostupni svima, bez obzira na lokaciju. Verujemo da svaki sat ima svoju priču, i mi smo tu da vam pomognemo da pronađete onaj koji će postati deo vaše.
                        </p>
                        <ul role="list" class="mt-8 space-y-8 text-gray-600">
                            <li class="flex gap-x-3">
                                <svg
                                    class="mt-1 size-5 flex-none text-indigo-600"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true"
                                    data-slot="icon"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                                <span
                                    ><strong class="font-semibold text-gray-900"
                                        >Vrhunska Preciznost</strong
                                    >
                                    Naši satovi koriste najmodernije mehanizme i kvarcne tehnologije kako bi obezbedili maksimalnu preciznost. Bez obzira na model, možete biti sigurni da će vaš sat uvek pokazivati tačno vreme.</span
                                >
                            </li>
                            <li class="flex gap-x-3">
                                <svg
                                    class="mt-1 size-5 flex-none text-indigo-600"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true"
                                    data-slot="icon"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                                <span
                                    ><strong class="font-semibold text-gray-900"
                                        >Vodootporni Dizajn</strong
                                    >
                                    Većina naših satova je dizajnirana da izdrži svakodnevne izazove, uključujući i kontakt sa vodom. Bez obzira da li se radi o kiši ili slučajnom uranjanju, vaš sat će ostati nepromenjen.</span
                                >
                            </li>
                            <li class="flex gap-x-3">
                                <svg
                                    class="mt-1 size-5 flex-none text-indigo-600"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true"
                                    data-slot="icon"
                                >
                                    <path
                                        d="M4.632 3.533A2 2 0 0 1 6.577 2h6.846a2 2 0 0 1 1.945 1.533l1.976 8.234A3.489 3.489 0 0 0 16 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234Z"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        d="M4 13a2 2 0 1 0 0 4h12a2 2 0 1 0 0-4H4Zm11.24 2a.75.75 0 0 1 .75-.75H16a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V15Zm-2.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75h-.01Z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                                <span
                                    ><strong class="font-semibold text-gray-900"
                                        >Dugotrajni Materijali</strong
                                    >
                                    Koristimo visokokvalitetne materijale poput nerđajućeg čelika i safirnog stakla kako bismo obezbedili dugovečnost i otpornost na ogrebotine. Svaki sat je izrađen da izdrži test vremena i zadrži svoj sjaj godinama</span
                                >
                            </li>
                        </ul>
                        <p class="mt-8">
                            Darko Satovi je više od prodavnice satova – to je mesto gde se susreću kvalitet, stil i strast prema preciznosti. Od svog osnivanja 2024. godine, trudimo se da našim kupcima pružimo najbolje proizvode, uz vrhunsku uslugu i posvećenost detaljima. Naša ponuda uključuje satove za sve prilike, od elegantnih modela za posebne trenutke do sportskih satova za svakodnevno nošenje. Sa timom stručnjaka uvek smo tu da vas savetujemo i uputimo ka savršenom izboru. Darko Satovi nije samo brend, već zajednica ljubitelja satova koji dele istu strast – ljubav prema vremenu i stilu.
                        </p>
                        <h2
                            class="mt-16 text-2xl font-bold tracking-tight text-gray-900"
                        >
                            Ne znate koji sat je za vas? Imamo rešenje.
                        </h2>
                        <p class="mt-6">
                            U Darko Satovi razumemo da odabir savršenog sata može biti izazov. Zato smo tu da vam pomognemo! Naš tim stručnjaka će vas savetovati i uputiti ka modelu koji najbolje odgovara vašem stilu i potrebama. Bez obzira da li tražite elegantan sat za posebne prilike ili sportski model za svakodnevno nošenje, mi ćemo vam pomoći da pronađete pravi izbor. Posetite nas i prepustite se iskustvu Darko Satovi!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</UserLayouts>

</template>
