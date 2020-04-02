from django.shortcuts import render,HttpResponse
import requests

# Create your views here.

def index(request):
    '''
    url = "https://priaid-symptom-checker-v1.p.rapidapi.com/body/locations"

    querystring = {"language":"en-gb"}

    headers = {
        'x-rapidapi-host': "priaid-symptom-checker-v1.p.rapidapi.com",
        'x-rapidapi-key': "e1c2fed302mshf90c0ff1b948ab0p10df29jsn7d12cdbcd155"
        }

    response = requests.request("GET", url, headers=headers, params=querystring)

    print(response.text)
    '''
    return render(request, 'homepage.html') 
