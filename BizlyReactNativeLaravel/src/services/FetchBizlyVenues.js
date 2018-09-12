
const URI = 'http://localhost:8000';

export default {
    async fetchBizlyVenues() {
        try {
            let response = await fetch(URI + '/api/bizly_venues');
            let responseJsonData = await response.json();
            return responseJsonData;
        }
        catch(e) {
            console.log(e)
        }
    }
}