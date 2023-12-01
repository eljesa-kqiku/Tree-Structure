const api_root_url = 'http://localhost:81/api'

async function getTreeData(){



    const request = new Request(api_root_url, {
        method: "POST",
        body: JSON.stringify({
            id: 0
        })
    });

    try{
        console.log({request})
        let response = await fetch(request)
        if (response.status === 200) {
            response = response.json();
            return response
        } else {
            throw new Error('Something went wrong on API server!');
        }
    }catch (e) {
        console.log(e)
    }
}

async function editNode(payload){
    $.startLoader();

    // TODO: write edit node api call
    console.log({payload})

    refreshScreen()
}