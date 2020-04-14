from django.shortcuts import render,HttpResponseRedirect
import requests
from .models import Patients
from .forms import PatientsForm

# Create your views here.

def index(request):
    form = PatientsForm(request.POST)

    if request.method == 'POST':
        
        if form.is_valid():
            form.save()

            return render(request,"symptoms.html")
    else:
        form = PatientsForm()
    
    return render(request, "homepage.html", {'form': form}) 

def loadSymptoms(request):
    url = "https://priaid-symptom-checker-v1.p.rapidapi.com/body/locations"

    querystring = {"language":"en-gb"}

    headers = {
        'x-rapidapi-host': "priaid-symptom-checker-v1.p.rapidapi.com",
        'x-rapidapi-key': "e1c2fed302mshf90c0ff1b948ab0p10df29jsn7d12cdbcd155"
        }

    response = requests.request("GET", url, headers=headers, params=querystring)

    print(response.text) 
    return render(request, "symptoms.html", print(response.text))


def conditions(request):
    
    return render(request, "conditions.html")

def treatment(request):
    
    return render(request, "treatment.html")


    