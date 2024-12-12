const EditButton = document.querySelectorAll(".EditButton")

EditButton.forEach(button=>{
    button.addEventListener("click",(e)=>{
        const cityID= e.currentTarget.dataset.id
        const cityname= e.currentTarget.dataset.name
        const citytype= e.currentTarget.dataset.name
        
    })
})
