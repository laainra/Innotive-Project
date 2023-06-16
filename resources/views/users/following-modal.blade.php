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
      @foreach($following as $follow)
      <li>
          <p>Name: {{ $follow->name }}</p>
          <p>User Name: {{ $follow->username }}</p>
          <img src="{{ $follow->avatar }}" alt="Avatar">
      </li>
  @endforeach
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
    const following = document.getElementById('following');
    const followingModal = document.querySelector('.modal');

    following.addEventListener('click', function () {
        following.classList.remove('hidden');
    });
  });
</script>
