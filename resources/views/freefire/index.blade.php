<x-header />

<body class="flex h-screen">
    <div class="m-auto p-5">
        <div class='flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden mx-auto font-vmax'>
            <div class="overflow-hidden rounded-xl relative shadow-lg hover:shadow-2xl movie-item text-white movie-card">
        <div class="absolute inset-0 z-10 transition duration-300 ease-in-out bg-gradient-to-t from-black via-gray-900 to-transparent"></div>
        <div class="relative cursor-pointer group z-10 px-10 pt-10 space-y-6 movie_info" data-lity="">
            <div class="poster__info align-self-end w-full">
                <div class="h-40"></div>
                <div class="space-y-6 detail_info">
                    <div class="flex flex-col space-y-1 inner">
                        
                        <h3 class="text-2xl font-bold text-white" data-unsp-sanitized="clean">VMAX Free Fire Series I</h3>
                        <div class="mb-0 text-lg text-gray-400">សំណើមថ្មីសម្រាប់កីឡាករ Free Fire</div>
                    </div>
                    <div class="flex flex-row justify-between datos">
                        <div class="flex flex-col datos_col">
                            <div class="popularity">1,200,000 រៀល</div>
                            <div class="text-sm text-gray-400">ប្រាក់រង្វាន់សរុប</div>
                        </div>
                        <div class="flex flex-col datos_col">
                            <div class="release">២៣ តុលា​ ២០២១</div>
                            <div class="text-sm text-gray-400">ចាប់ផ្តើមការប្រកួត</div>
                        </div>
                        <div class="flex flex-col datos_col">
                            <div class="release">VMAX</div>
                            <div class="text-sm text-gray-400">អ្នករៀបចំ</div>
                        </div>
                    </div>
                    <div class="flex flex-col overview">
                        <div class="flex flex-col"></div>
                        <div class="text-xs text-gray-400 mb-2">អំពីការប្រកួត</div>
                        <p class="text-xs text-gray-300 mb-6 leading-6">
                            ការប្រកួត VMAX Free Fire Series I ជាការប្រកួតកីឡាអេឡិចត្រូនិច អនឡាញ លើវិញ្ញាសារ Free Fire ដែលបានផ្តួចផ្តើម និងរៀបចំដោយក្រុមការងារ VMAX។ ការប្រកួតនេះ បែងចែកជាពីផ្នែកសម្រាប់ កីឡាករលេងជាក្រុម (SQUAD) និងកីឡាករលេងម្នាក់ឯង (SOLO) ដែលផ្តល់ឪកាស អោយកីឡាករគ្រប់ៗគ្នា បញ្ចេញសមត្ថភាព។
                            ប្រាក់រង្វាន់សរុបមានចំនួនតិចតួចទេ ដែលនេះជាទឹកចិត្តក្រុមការងារ VMAX (អ្នករៀបចំការប្រកួតកីឡាអេឡិចត្រូច) ក្នុងការផ្តល់សំណើមថ្មីមួយ សម្រាប់សហគមន៍អ្នកលេង Free Fire អោយកាន់តែរីកចម្រើនមួយកំរិតទៀត។ 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img class="absolute inset-0 transform w-full -translate-y-4" src="{{ URL::to('/img/poster.jpg') }}" style="filter: grayscale(0);" />
        <div class="poster__footer flex flex-row relative pb-5 space-x-4 z-10">
            <a
                class="flex items-center py-2 px-4 rounded-full mx-auto text-white bg-green-500 hover:bg-green-700"
                href="/squad"
                target="_blank"
                data-unsp-sanitized="clean"
            >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
                <div class="text-sm text-white ml-2">ប្រកួតជា SQUAD</div>
            </a>
        </div>
        <div class="poster__footer flex flex-row relative pb-10 space-x-4 z-10">
            <a
                class="flex items-center py-2 px-4 rounded-full mx-auto text-white bg-blue-500 hover:bg-blue-700"
                href="/solo"
                target="_blank"
                data-unsp-sanitized="clean"
            >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
                <div class="text-sm text-white ml-2">ប្រកួតជា SOLO</div>
            </a>
        </div>
        </div>
        </div>
    </div>
</body>