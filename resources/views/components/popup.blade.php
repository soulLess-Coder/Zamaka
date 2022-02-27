<!-- The button to open modal -->
<label for="my-modal" class="btn modal-button">open modal</label>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="my-modal" class="modal-toggle">
<div class="modal">
  <div class="modal-box">
    <h3 class="font-bold text-lg">{$title}</h3>
    <p class="py-4">{$slot}</p>
    <div class="modal-action">
      <label for="my-modal" class="btn">{$button}</label>
    </div>
  </div>
</div>