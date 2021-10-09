<x-header />
<!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

<div class="container max-w-full mx-auto md:py-24 px-6 font-khmer">
  <div class="max-w-lg mx-auto px-6">
        <div class="relative flex flex-wrap">
            <div class="w-full relative">
                <div class="md:mt-6">
                    <div class="text-center font-semibold text-blue-500">
                        សំណើរចុះឈ្មោះក្រុមដើម្បីចូលរួមការប្រកួត VMAX Free Fire Series I
                    </div>
                    <div class="text-center text-black mt-5">
                        រៀបចំដោយ VMAX
                    </div>
                    <form class="mt-8" enctype="multipart/form-data" action="squad" method="POST">
                        @csrf
                        <div class="mx-auto max-w-lg ">
                            <div class="py-2">
                                <span class="px-1 text-sm text-gray-600">ឈ្មោះរបស់អ្នក</span>
                                <input placeholder="" type="text"
                                       class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="name">
                            </div>
                            <div class="py-2">
                                <span class="px-1 text-sm text-gray-600">លេខទូរស័ព្ទ</span>
                                <input placeholder="" type="text"
                                       class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="phone">
                            </div>
                            
                            <div class="py-5">
                            </div>
                            <div class="py-2">
                                <span class="px-1 text-sm text-gray-600">ឈ្មោះក្រុម</span>
                                <input placeholder="" type="text"
                                       class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="team">
                            </div>
                            
                            <div class="py-2">
                                <span class="px-1 text-sm text-gray-600">សញ្ញាសំគាល់ក្រុម</span>
                                <input placeholder="" type="file"
                                       class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="logo">
                            </div>
                            <div class="py-2">
                                <span class="px-1 text-sm text-gray-600">កីឡាករទី​ ១ Game ID & Server ID</span>
                                <input placeholder="" type="text"
                                       class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="id1">
                            </div>
                            <div class="py-2">
                                <span class="px-1 text-sm text-gray-600">កីឡាករទី​ ២ Game ID & Server ID</span>
                                <input placeholder="" type="text"
                                       class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="id2">
                            </div>
                            <div class="py-2">
                                <span class="px-1 text-sm text-gray-600">កីឡាករទី​ ៣ Game ID & Server ID</span>
                                <input placeholder="" type="text"
                                       class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="id3">
                            </div>
                            <div class="py-2">
                                <span class="px-1 text-sm text-gray-600">កីឡាករទី​ ៤ Game ID & Server ID</span>
                                <input placeholder="" type="text"
                                       class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="id4">
                            </div>
                            <div class="py-2">
                                <span class="px-1 text-sm text-gray-600">កីឡាករបំរុង Game ID & Server ID</span>
                                <input placeholder="" type="text"
                                       class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="id5">
                            </div>
                            <div class="flex justify-start">
                                <label class="block text-gray-500 font-bold my-4 flex items-center">
                                    <input class="leading-8 text-pink-600 top-0" type="checkbox"/>
                                    <span class="ml-2 text-sm py-2 text-gray-600 text-left">ខ្ញុំយល់ព្រមតាម
                                          <a href="#"
                                             class="font-semibold text-black border-b-2 border-gray-200 hover:border-gray-500">
                                           លក្ខខណ្ឌ និងច្បាប់នៃការប្រកួតរបស់អ្នករៀបចំការប្រកួត
                                          </a>និង
                                          <a href="#"
                                             class="font-semibold text-black border-b-2 border-gray-200 hover:border-gray-500">
                                            និងគោលការណ៍ឯកជនភាព</a>
                                    </span>
                                </label>
                            </div>
                            <button class="mt-3 text-lg font-semibold
            bg-gray-800 w-full text-white rounded-lg
            px-6 py-3 block shadow-xl hover:text-white hover:bg-black" type="submit">
                                ចុះឈ្មោះ
                            </button>
                        </div>
                    </form>

                    <div class="text-sm font-semibold block sm:hidden py-6 flex justify-center">
                        <a href="#"
                           class="text-black font-normal border-b-2 border-gray-200 hover:border-teal-500">You're already member?
                            <span class="text-black font-semibold">
            Login
          </span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>