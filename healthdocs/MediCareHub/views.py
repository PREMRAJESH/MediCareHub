from django.shortcuts import render,HttpResponse
from datetime import datetime
from MediCareHub.models import Contact
from MediCareHub.models import Appointment
from MediCareHub.models import Pharmacy
from django.contrib import messages
# Create your views here.
def index(request):
    return render(request,'index.html')

def about(request):
    return render(request,'about.html')

def appointment(request):
    if request.method == "POST":
       firstName = request.POST.get('firstName')
       lastName = request.POST.get('lastName')
       dob = request.POST.get('dob')
       gender = request.POST.get('gender')
       address = request.POST.get('address')
       city = request.POST.get('city')
       pincode = request.POST.get('pincode')
       email  = request.POST.get('email')
       pdate = request.POST.get('pdate')
       ptime = request.POST.get('ptime')
       treatment = request.POST.get('treatment')
       doctorName = request.POST.get('doctorName')
       appointment = Appointment(firstName = firstName,lastName = lastName,dob= dob,gender = gender,address = address,city = city, pincode= pincode, email = email, pdate = pdate ,ptime = ptime, treatment = treatment, doctorName = doctorName)
       messages.success(request, "Your Appointment has been booked")
       appointment.save()
    return render(request,'appointment.html')

def login(request):
    return render(request,'login.html')

def register(request):
    return render(request, 'register.html')

def pharmacy(request):
    if request.method == "POST":
        medicine = request.POST.get('medicine')
        price = request.POST.get('price')
        pharmacy = Pharmacy(medicine = medicine,price = price)
        messages.success(request, "Your order has been placed")
        pharmacy.save()
    return render(request, 'pharmacy.html')

def buy(request):
    return render(request,'buy.html')
    
def about(request):
    return render(request, 'about.html')

def contact(request):
    if request.method == "POST":
        name = request.POST.get('name')
        email = request.POST.get('email')
        desc = request.POST.get('desc')
        contact = Contact(name = name, email = email, desc = desc,date=datetime.today())
        contact.save()
        messages.success(request, "Your feedback has been submitted")
    return render(request, 'Contact.html')