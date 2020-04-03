from django.db import models

# Create your models here.
class Patients(models.Model):
    GENDER_CHOICES = (
        ('M', 'Male'),
        ('F', 'Female'),
    )
    Name=models.TextField(max_length=255,null=False,editable=True)
    Age=models.IntegerField(null=False,editable=False)
    Gender = models.CharField(max_length=1, choices=GENDER_CHOICES)
    DOB = models.DateField()

   

