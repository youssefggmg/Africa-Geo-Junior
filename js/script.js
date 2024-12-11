const editbutton = document.querySelectorAll(".editButton");
const editCounryForm = document.querySelector("#editCounryForm")

editbutton.forEach((button) => {
    button.addEventListener("click", (e) => {
        const countryID = e.currentTarget.dataset.id
        const countryName = e.currentTarget.dataset.name
        const countryPopulation = e.currentTarget.dataset.population
        const countrylanguege = e.currentTarget.dataset.languege
        editCounryForm.innerHTML = `<div class='fixed inset-0 flex items-center justify-center z-20'>
  <div class='w-96 backdrop-blur-lg bg-opacity-80 rounded-lg shadow-lg p-5 bg-gray-900 text-white'>
    <div class='flex justify-between'>
      <h2 class='text-2xl font-bold pb-5'>update country info</h2>
      <div id='closeButton'>
        <i class="fa-solid fa-square-xmark fa-xl"></i>
      </div>
    </div>
    <form method='post' action='./dbrequests/updateCountry.php'>
      <input type='number' class='hidden' name = 'cid' value='${countryID}'>
      <div class='mb-4'>
        <label for='Cname' class='block mb-2 text-sm font-medium'>Your name</label>
        <input
          type='text'
          id='Cname'
          name = 'cname'
          class='bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full py-2.5 px-4'
          placeholder='madagascar'
          required
          value='${countryName}'
        >
      </div>
      <div class='mb-4'>
        <label for='population' class='block mb-2 text-sm font-medium'>population</label>
        <input
          type='number'
          id='population'
          name = 'population'
          class='bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full py-2.5 px-4'
          placeholder='33003254'
          required
          value='${countryPopulation}'
        >
      </div>
      <div class='mb-4'>
        <label for='languege' class='block mb-2 text-sm font-medium'>languege</label>
        <input
          type='text'
          id='languege'
          class='bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full py-2.5 px-4'
          placeholder='arabic'
          name = 'languege'
          required
          value='${countrylanguege}'
        >
      </div>
      <div>
        <p class='text-red-500 pb-5' id='error'></p>
      </div>
      <div class='flex items-center justify-between mb-4'>
        <button
          type='submit'
          class='text-white bg-purple-600 hover:bg-purple-700 focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm py-2.5 px-5 w-full sm:w-auto mx-auto'
        >
          submit
        </button>
      </div>
    </form>
  </div>
</div>
        `
        const closeButton = document.querySelector("#closeButton")
        closeButton.addEventListener("click", (e) => {
            editCounryForm.innerHTML = ""
        })
    })
})