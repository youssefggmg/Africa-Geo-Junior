const EditButton = document.querySelectorAll(".EditButton")
const popup = document.querySelector("#popup")

EditButton.forEach(button => {
    button.addEventListener("click", (e) => {
        const cityID = e.currentTarget.dataset.id
        const cityname = e.currentTarget.dataset.name
        const citytype = e.currentTarget.dataset.type
        
        let iscapital ="" ;
        let isNotcapital="" ;
        if (citytype== "capital") {
            iscapital="selected"
        }else{
            isNotcapital = "selected"
        }
        console.log(iscapital);
        popup.innerHTML = `<div class='fixed inset-0 flex items-center justify-center z-20'>
  <div class='w-96 backdrop-blur-lg bg-opacity-80 rounded-lg shadow-lg p-5 bg-gray-900 text-white'>
    <div class='flex justify-between'>
      <h2 class='text-2xl font-bold pb-5'>update city info</h2>
      <div id='closeButton'>
        <i class="fa-solid fa-square-xmark fa-xl"></i>
      </div>
    </div>
    <form method='post' action="../dbrequests/editCities.php">
      <input type='number' class='hidden' name = 'cid' value='${cityID}'>
      <div class='mb-4'>
        <label for='Cname' class='block mb-2 text-sm font-medium'>city name</label>
        <input
          type='text'
          id='Cname'
          name = 'cname'
          class='bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full py-2.5 px-4'
          placeholder='madagascar'
          required
          value='${cityname}'
        >
      </div>
      <div>
        <label for='type' class='block mb-2 text-sm font-medium'>type</label>

      <select id="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 name='type' ">
    <option ${iscapital}>capital</option>
    <option ${isNotcapital} >other</option>
  </select>
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
</div>`
const closeButton = document.querySelector("#closeButton")
closeButton.addEventListener("click",()=>{
    popup.innerHTML= ""
})
    })
})
