<x-simple-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
               <div>
            <div>
                {{-- <img src="/qr-code/v-card" class="w-24 h-24 block object-contain" /> --}}

                @php

                                        // define vcard
                        $vcard = new JeroenDesloovere\VCard\VCard();

                        // define variables
                        $firstname = 'Janus';
                        $lastname = 'Helkjær';
                        $additional = '';
                        $prefix = '';
                        $suffix = '';

                        // add personal data
                        $vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);

                        // add work data
                        $vcard->addCompany('nabo.studio');
                        $vcard->addJobtitle('Web Developer');
                        $vcard->addEmail('hello@janushelkjaer.com');
                        #$vcard->addPhoneNumber(1234121212, 'PREF;WORK');
                        $vcard->addPhoneNumber('004523714902', 'WORK');
                        #$vcard->addAddress(null, null, 'street', 'worktown', null, 'workpostcode', 'Belgium');
                        $vcard->addURL('http://www.janushelkjaer.com');
                        #$vcard->addLabel('street, worktown, workpostcode Belgium', 'work');

                        #dd(asset('assets/images/jh-vcard.png'));

                        #$vcard->addPhoto(asset('assets/images/jh-vcard.png'));
                        //$vcard->addPhoto('https://raw.githubusercontent.com/jeroendesloovere/vcard/master/tests/image.jpg');

                        // return vcard as a string
                        //return $vcard->getOutput();

                @endphp

                <div class="p-12 flex flex-col items-center justify-center">
                    <div class="mb-6 ">
                        <div class="prose">
                        <h3 class="">
                            Janus Helkjær
                        </h1>
                        </div>
                        <ul class="list-none p-0 m-0">
                            <li class="flex items-center justify-center">
                                <span class="inline-block p-1 mr-1 bg-slate-100 border rounded"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
  <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
</svg>
</span>
<a class= href="mailto:hello@janushelkjaer.com">hello@janushelkjaer.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="h-64 w-64">
                        {{-- {{ QrCode::size(400)->color(000, 000, 000)->style('dot')->generate($vcard->getOutput()) }} --}}

                        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(400)->style('dot')->generate($vcard->getOutput())) !!} ">
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</x-simple-layout>
