from django.contrib import admin
from MediCareHub.models import Contact
from MediCareHub.models import Appointment
from MediCareHub.models import Pharmacy
# Register your models here.

admin.site.register(Contact)
admin.site.register(Appointment)
admin.site.register(Pharmacy)