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
                            $vcard->addCompany('Freelancer');
                            $vcard->addJobtitle('Software Engineer & Marketeer');
                            $vcard->addEmail('hello@janushelkjaer.com');
                            #$vcard->addPhoneNumber(1234121212, 'PREF;WORK');
                            $vcard->addPhoneNumber('23714902', 'WORK');
                            #$vcard->addAddress(null, null, 'street', 'worktown', null, 'workpostcode', 'Belgium');
                            $vcard->addURL('https://janushelkjaer.com');
                            #$vcard->addLabel('street, worktown, workpostcode Belgium', 'work');

                            #dd(asset('assets/images/jh-vcard.png'));

                            #$vcard->addPhoto(asset('assets/images/jh-vcard.png'));
                            //$vcard->addPhoto('https://raw.githubusercontent.com/jeroendesloovere/vcard/master/tests/image.jpg');

                            // return vcard as a string
                            //return $vcard->getOutput();
                        @endphp

                        <div class="p-12 flex flex-col items-center justify-center">
                            <div class="mb-6 ">
                                <div class="flex flex-col items-center justify-center mb-3">
                                    <div class="rounded-full shadow-inner p-0.5">
                                        <img src="{{ asset('assets/images/jh-vcard.png') }}" alt="Janus Helkjær"
                                            class="rounded-full block w-24 h-24">
                                    </div>
                                </div>
                                <div class="prose">
                                    <h3 class="">
                                        Janus Helkjær
                                        </h1>
                                </div>
                                {{-- <ul class="list-none p-0 m-0">
                            <li class="flex items-center justify-center">
                                <span class="inline-block p-1 mr-1 bg-slate-100 border rounded"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
  <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25" />
</svg>
</span>
<a class= href="mailto:hello@janushelkjaer.com">hello@janushelkjaer.com</a>
                            </li>
                        </ul> --}}
                            </div>
                            <div class="h-48 w-48 p-3 border-solid border">
                                {{-- {{ QrCode::size(400)->color(000, 000, 000)->style('dot')->generate($vcard->getOutput()) }} --}}

                                <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(400)->style('dot')->generate($vcard->getOutput())) !!} ">
                            </div>
                        </div>
                    </div>
                </div>



                {{-- <div>
  <div class="sm:hidden">
    <label for="tabs" class="sr-only">Select a tab</label>
    <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
    <select id="tabs" name="tabs" class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
      <option selected>My Account</option>
      <option>Company</option>
      <option>Team Members</option>
      <option>Billing</option>
    </select>
  </div>
  <div class="hidden sm:block">
    <nav class="isolate flex divide-x divide-gray-200 rounded-lg shadow" aria-label="Tabs">
      <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
      <a href="#" class="text-gray-900 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 focus:z-10" aria-current="page">
        <span>Card</span>
        <span aria-hidden="true" class="bg-indigo-500 absolute inset-x-0 bottom-0 h-0.5"></span>
      </a>
      <a href="#" class="text-gray-500 hover:text-gray-700 group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 focus:z-10">
        <span>What I Do</span>
        <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
      </a>
      <a href="#" class="text-gray-500 hover:text-gray-700 group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 focus:z-10">
        <span>Private</span>
        <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
      </a>
      <a href="#" class="text-gray-500 hover:text-gray-700 rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 focus:z-10">
        <span>Elevator</span>
        <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
      </a>
    </nav>
  </div>
</div> --}}
            </div>

            
        </div>
    </div>
</x-simple-layout>
