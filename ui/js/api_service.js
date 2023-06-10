const api_root_url = 'http://localhost:81/api'

async function getTreeData(){
    let request = new Request(api_root_url);

    try{
        let response = await fetch(request);
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