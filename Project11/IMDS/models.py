from django.db import models
from django import forms


# Create your models here.
class Patients(models.Model):
    GENDER_CHOICES = (
        ('M', 'Male'),
        ('F', 'Female'),
    )
    Name=models.TextField(max_length=20,null=False,editable=True)
    Age=models.IntegerField(null=False,editable=True)
    Gender = models.CharField(max_length=1, choices=GENDER_CHOICES)
    DOB = models.DateField()


