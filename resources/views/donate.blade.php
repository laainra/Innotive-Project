<x-app-layout>
    <style>
        .selected-label {
            background-color: purple;
        }
    </style>

    <div>
        <form action="{{route('donate.pay',$tweet)}}">
            <section class="flex items-center justify-center mt-10">
                <div class="space-y-6 ml-5">
                    <h1 class="text-center">Masukkan Nominal Donasi</h1>
                    <div class="flex items-center">
                        <input type="radio" name="radio" id="radio1" class="hidden" onchange="handleRadioChange('radio1')">
                        <label for="radio1" id="label1" class="px-8 py-2 rounded bg-purple-400 text-white w-full text-center hover:bg-purple-700">Rp 10.000</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" name="radio" id="radio2" class="hidden" onchange="handleRadioChange('radio2')">
                        <label for="radio2" id="label2" class="px-8 py-2 rounded bg-purple-400 text-white w-full text-center hover:bg-purple-700">Rp 20.000</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" name="radio" id="radio3" class="hidden" onchange="handleRadioChange('radio3')">
                        <label for="radio3" id="label3" class="px-8 py-2 rounded bg-purple-400 text-white w-full text-center hover:bg-purple-700">Rp 30.000</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" name="radio" id="radio4" class="hidden" onchange="handleRadioChange('radio4')">
                        <label for="radio4" id="label4" class="px-8 py-2 rounded bg-purple-400 text-white w-full text-center hover:bg-purple-700">Rp 50.000</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" name="radio" id="radio5" class="hidden" onchange="handleRadioChange('radio5')">
                        <label for="radio5" id="label5" class="px-7 py-2 w-full text-center rounded bg-purple-400 text-white hover:bg-purple-700">Rp 100.000</label>
                    </div>
                    <fieldset>
                        <label for="text1">Nominal Donasi Lainnya</label><br>
                        <input type="text" name="text1" id="text1" placeholder="Rp. " class="w-full px-4 py-3 bg-gray-300 rounded focus:bg-purple-400 hover:bg-purple-700">
                    </fieldset><br>
                    <div>
                        <button type="submit" class="bg-gray-600 w-full px-8 py-3 rounded text-white font-bold hover:bg-purple-500">Pay</button>
                    </div>
                </div>
            </section>
        </form>
    </div>

    <script>
        function handleRadioChange(radioId) {
            // Reset all labels to default background color
            const labels = document.querySelectorAll("label");
            labels.forEach(label => {
                label.classList.remove("selected-label");
            });
            
            // Set the selected label's background color
            const selectedLabel = document.getElementById("label" + radioId.slice(-1));
            selectedLabel.classList.add("selected-label");
        }

        function showSuccessPopup() {
            alert("Donation berhasil!");
            
            // You can also use a modal or other UI element to display the success message
            window.location.href = "route{{'tweets'}}"; 
        }
    </script>
</x-app-layout>
