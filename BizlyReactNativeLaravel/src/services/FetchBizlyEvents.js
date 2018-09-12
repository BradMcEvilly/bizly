
const URI = 'http://localhost:8000';

export default {
    async fetchBizlyEvents() {
        try {
            let response = await fetch(URI + '/api/bizly_events');
            let responseJsonData = await response.json();
            return responseJsonData;
        }
        catch(e) {
            console.log(e)
        }
    }
}