from django.db import models

# Create your models here.
class Contact(models.Model):
    name = models.CharField(max_length=122)
    email = models.CharField(max_length=122)
    desc = models.TextField()
    date = models.DateField()

    def __str__(self):
        return self.name

class Appointment(models.Model):
    firstName = models.CharField(max_length=122)
    lastName = models.CharField(max_length=122)
    dob = models.DateField()
    gender = models.CharField(max_length=6)
    address = models.CharField(max_length=122)
    city = models.CharField(max_length=10)
    pincode = models.CharField(max_length=10)
    email  = models.EmailField(max_length=39)
    pdate = models.DateField()
    ptime = models.TimeField()
    treatment = models.CharField(max_length=122)
    doctorName = models.CharField(max_length=122)
    def __str__(self):
        return self.firstName
    