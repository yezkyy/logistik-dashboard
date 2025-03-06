<div class="flex items-center justify-center w-fit h-fit">
    <label for="file" class="cursor-pointer bg-[#333] p-[20px_165px] rounded-[40px] border-2 border-dashed border-[#5DB996] shadow-[0_0_200px_-50px_rgba(0,0,0,0.5)] text-[#eee]">
      <div class="flex flex-col items-center justify-center gap-5">
        <!-- SVG Icon -->
        <svg viewBox="0 0 640 512" height="2em" class="mb-5 fill-[#5DB996]">
          <path
            d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"
          ></path>
        </svg>
        <!-- Drag and Drop Text -->
        <p class="text-[#5DB996]">Drag and Drop</p>
        <p class="text-[#5DB996]">or</p>
        <!-- Browse Button -->
        <span class="bg-[#5DB996] text-[#333] px-5 py-2 rounded-[10px] transition-all duration-300 hover:bg-[#0A6A3E] hover:text-white">
          Browse file
        </span>
      </div>
      <input id="file" type="file" class="hidden" />
    </label>
  </div>  