<!-- AddToAny BEGIN -->

<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->

<!-- Social Media Sharing Modal -->
<div class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
  <div class="modal-content bg-white p-8">
    <div class="flex justify-between mb-4">
      <h2 class="text-xl font-bold">Share Innovation</h2>
      <button class="text-gray-600 ml-3" onclick="closeModal()"><i class="fas fa-times"></i></button>
    </div>
    <!-- Social Media Sharing Buttons -->
    <div class="flex justify-center">
      <!-- Add your social media sharing buttons here -->
      <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
        <a class="a2a_button_facebook" href="https://www.facebook.com/sharer/sharer.php?u=http://localhost:8000/tweets/5" target="_blank"></a>
        <a class="a2a_button_twitter" href="https://twitter.com/intent/tweet?text=You+must+check+it&url=http://localhost:8000/tweets/5" target="_blank"></a>
        <a class="a2a_button_whatsapp" href="https://wa.me/?text=You+must+check+it+http://localhost:8000/tweets/5" target="_blank"></a>
      </div>
      <!-- Add more buttons for other social media platforms as needed -->
    </div>
    <div class="flex justify-center mt-4">
      <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded" onclick="closeModal()">Close</button>
    </div>
  </div>
</div>

<script>
  function closeModal() {
    const socialMediaModal = document.querySelector('.modal');
    socialMediaModal.classList.add('hidden');
  }

  document.addEventListener('DOMContentLoaded', function () {
    const iosShareButton = document.getElementById('iosShareButton');
    const socialMediaModal = document.querySelector('.modal');

    iosShareButton.addEventListener('click', function () {
      socialMediaModal.classList.remove('hidden');
    });
  });
</script>
