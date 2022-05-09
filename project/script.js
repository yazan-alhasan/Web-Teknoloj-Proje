const api="https://www.breakingbadapi.com/api/characters"
async function getData(){
    const respose = await fetch(api)
    const data = await respose.json();

    PrintData(data)
}

function PrintData(data){
    const header = document.querySelector("#header")
    const content = document.querySelector("#content")
    header.innerHTML += `
    <select class="form-control" onchange="getCh(this.value)">
        <option>Please Select</option>
        ${data.map(charachter=>`<option>${charachter.name}</option>`)}
    </select>
    `
}

async function getCh(name){
    if(name!='Please Select')
    {
        const response=await fetch(`${api}?name=${name}`)
    const data =await response.json()

    content.innerHTML=`
    <h2 style="padding-bottom: 30px; padding-top: 30px;">character name: ${data[0].name} (${data[0].nickname})</h2>
    <h4 style="padding-bottom: 30px;">actor name: ${data[0].portrayed}</h4>
    <img src="${data[0].img}" width="250">
    `
    }
}

getData() 