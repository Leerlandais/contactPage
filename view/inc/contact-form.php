<!-- component -->

<div class="h-96"></div>
<div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
    <div class="bg-green-700 bg-opacity-20 w-full shadow rounded p-8 sm:p-12 -mt-72">
        <p class="text-3xl font-bold leading-7 text-center text-white">Contact me</p>
        <form action="" method="post">
            <div class="md:flex items-center mt-12">
                <input  type="text"
                        class="hidden"
                        name="contactID" id="contactID"
                        placeholder="<?php if (isset($visitorName) && $visitorName != "") echo $visitorName["cp_visitor_id"]?>"
                        value="<?php if (isset($visitorName) && $visitorName != "") echo $visitorName["cp_visitor_id"]?>"
                        required>
                <div class="w-full md:w-1/2 flex flex-col">
                    <label class="font-semibold leading-none text-gray-600"
                           for="contactName"
                           id="contactNameLabel"></label>
                                <input type="text"
                                       name="contactName"
                                       id="contactName"
                                       class="leading-none text-gray-500 text-center p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-white bg-opacity-50 rounded"
                                       placeholder="<?php if (isset($visitorName) && $visitorName != "") echo $visitorName["cp_visitor_name"]?>"
                                       value="<?php if (isset($visitorName) && $visitorName != "") echo $visitorName["cp_visitor_name"]?>"/>
                </div>
                <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                    <label class="font-semibold leading-none text-gray-600"
                           for="contactMail"
                           id="contactMailLabel"></label>
                    <input type="email"
                           class="leading-none text-gray-500 p-3 focus:outline-none focus:border-blue-700 mt-4 border-0 bg-white bg-opacity-50 rounded"
                           name="contactMail"
                           id="contactMail"
                           placeholder="<?php if (isset($visitorName) && $visitorName != "") echo $visitorName["cp_visitor_email"]?>"
                           value="<?php if (isset($visitorName) && $visitorName != "") echo $visitorName["cp_visitor_email"]?>"/>
                </div>
            </div>

            <div>
                <div class="w-full flex flex-col mt-8">
                    <label class="font-semibold leading-none text-gray-300"
                           for="contactMail"
                           id="contactMailLabel"></label>
                    <textarea type="text"
                              class="h-40 text-base leading-none text-gray-50 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-white bg-opacity-50 border-0 rounded"
                              name="contactMess"
                              id="contactMess"></textarea>
                </div>
            </div>
            <div class="flex items-center justify-center w-full">
                <button class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-blue-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">
                    Send message
                </button>
            </div>
        </form>
    </div>
</div>
