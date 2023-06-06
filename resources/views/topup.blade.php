<x-app-layout>
    <style>
        .selected-label {
            background-color: purple;
        }
    </style>
    <form>
        <section class="flex items-center justify-center mt-10">
            <div class="space-y-6 ml-5">
                <h1 class="text-center text-xl">Choose Top Up Method</h1>
                <div class="flex items-center">

                    <input type="radio" name="radio" id="radio1" class="hidden" onchange="handleRadioChange('radio1')">
                    <label for="radio1" id="label1" class="px-8 py-2 rounded bg-purple-400 text-white w-full text-center hover:bg-purple-700">
                        <img class="h-20 w-auto" src="{{asset('/images/img/gopay.png')}}">
                        GoPay</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" name="radio" id="radio2" class="hidden" onchange="handleRadioChange('radio2')">
                    <label for="radio2" id="label2" class="px-8 py-2 rounded bg-purple-400 text-white w-full text-center hover:bg-purple-700">
                        <img class="h-20 w-auto" src="{{asset('/images/img/shopeepay.png')}}">
                        ShopeePay</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" name="radio" id="radio3" class="hidden" onchange="handleRadioChange('radio3')">
                    <label for="radio3" id="label3" class="px-8 py-2 rounded bg-purple-400 text-white w-full text-center hover:bg-purple-700">
                        <img class="h-20 w-auto" src="{{asset('/images/img/dana.png')}}">
                        Dana</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" name="radio" id="radio4" class="hidden" onchange="handleRadioChange('radio4')">
                    <label for="radio4" id="label4" class="px-8 py-2 rounded bg-purple-400 text-white w-full text-center hover:bg-purple-700">
                        <img class="h-20 w-auto" src="{{asset('/images/img/linkaja.png')}}">
                        LinkAja</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" name="radio" id="radio5" class="hidden" onchange="handleRadioChange('radio5')">
                    <label for="radio5" id="label5" class="px-7 py-2 w-full text-center rounded bg-purple-400 text-white hover:bg-purple-700">
                        <div class="flex justify-between">
                            <img class="h-5 w-auto" src="{{ asset('/images/img/bri.png') }}">
                            <img class="h-5 w-auto" src="{{ asset('/images/img/bni.png') }}">
                          </div>
                        <div class="flex justify-between mt-5">
                            <img class="h-10 w-auto" src="{{ asset('/images/img/mandiri.png') }}">
                            <img class="h-5 w-auto" src="{{ asset('/images/img/btn.png') }}">
                          </div>
                          
                        Transfer Bank</label>
                </div>
                <div>
                    <button type="submit" class="bg-gray-600 w-full px-8 py-3 rounded text-white font-bold hover:bg-purple-500" onclick="showSuccessPopup()">Top Up</button>
                </div>
            </div>
        </section>
    </form>
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
            alert("TopUp berhasil!");

            // You can also use a modal or other UI element to display the success message
            window.location.replace("http://localhost:8000/wallet");

}

    </script>
</x-app-layout>

