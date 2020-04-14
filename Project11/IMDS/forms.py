from django.forms import ModelForm, TextInput, NumberInput,DateInput
from .models import Patients 
from django import forms

class PatientsForm(forms.ModelForm):
    class Meta:
        model = Patients 
        #fields = ['Name','Gender','Age','DOB']
        fields = '__all__'
        widgets = {'Name' : TextInput(attrs={'class' : 'input', 'placeholder' : 'Name'})}
        widgets = {'Gender' : TextInput(attrs={'class': 'Input', 'placeholder': 'M/F'})}
        widgets = {'Age' : NumberInput(attrs={'class': 'Input', 'placeholder': 'age'})}
        widgets = {'DOB' : DateInput(attrs={'format':'%d/%m/%y','class': 'Input', 'placeholder': 'D.O.B'})}
