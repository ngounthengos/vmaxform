<x-header />
<!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

<div class="container max-w-full mx-auto py-10 md:py-24 px-6 font-vmax">
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
                    <form class="mt-8" enctype="multipart/form-data" action="solo" method="POST">
                        @csrf
                        <div class="mx-auto max-w-lg ">
                            <div class="py-2">
                                <span class="px-1 text-sm text-gray-600">ឈ្មោះរបស់អ្នក</span>
                                <input placeholder="សូមបំពេញឈ្មោះពិតរបស់អ្នក" type="text"
                                       class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300  shadow-md focus: focus:bg-white focus:border-gray-600 focus:outline-none italic-placeholder" name="name">
                            </div>
                            <div class="py-2">
                                <span class="px-1 text-sm text-gray-600">លេខទូរស័ព្ទ</span>
                                <input placeholder="000-000-000(0)" type="tel"
                                       class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300  shadow-md focus: focus:bg-white focus:border-gray-600 focus:outline-none italic-placeholder" oninvalid="this.setCustomValidity('សូមបំពេញលេខទូរស័ព្ទ អោយបានត្រឹមត្រូវ')"
                oninput="this.setCustomValidity('')" name="phone" required>
                            </div>
                            
                            <div class="py-5">
                            </div>
                            <div class="py-2">
                                <span class="px-1 text-sm text-gray-600">ឈ្មោះក្នុងហ្គេម (In Game Name)</span>
                                <input placeholder="" type="text"
                                       class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300  shadow-md focus: focus:bg-white focus:border-gray-600 focus:outline-none"  oninvalid="this.setCustomValidity('សូមបំពេញលេខព័ត៌មាន អោយបានត្រឹមត្រូវ')"
                oninput="this.setCustomValidity('')" name="gamename" required>
                            </div>
                            
                                <span class="px-1 text-sm text-gray-600">លេខគណនីហ្គេម (Game ID)</span>
                                <input placeholder="" type="text"
                                       class="text-md block px-3 py-2 rounded-lg w-full
                bg-white border-2 border-gray-300  shadow-md focus: focus:bg-white focus:border-gray-600 focus:outline-none"   oninvalid="this.setCustomValidity('សូមបំពេញលេខព័ត៌មាន អោយបានត្រឹមត្រូវ')"
                oninput="this.setCustomValidity('')" name="id" required>
                            </div>
                            <div class="flex justify-start">
                                <label class="block text-gray-500 font-bold my-4 flex items-center">
                                    <input class="leading-8 text-pink-600 top-0" type="checkbox" required/>
                                    <span class="ml-2 text-sm py-2 text-gray-600 text-left">ខ្ញុំយល់ព្រមតាម
                                          <a href="/terms"
                                             class="font-semibold text-black border-b-2 border-gray-200 hover:border-gray-500">
                                           លក្ខខណ្ឌ និងច្បាប់នៃការប្រកួតរបស់អ្នករៀបចំការប្រកួត
                                          </a>
                                    </span>
                                </label>
                            </div>
                            <button class="mt-3 text-lg font-semibold
            bg-blue-500 w-full text-white rounded-lg
            px-6 py-3 block shadow-xl hover:text-white hover:bg-blue-900" type="submit">
                                ចុះឈ្មោះ
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>