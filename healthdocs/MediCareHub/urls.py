"""
URL configuration for healthdocs project.

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/4.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path
from MediCareHub import views 

urlpatterns = [
    path("", views.index, name='index'),
    path("about", views.about, name='about'),
    path("appointment",views.appointment, name='appointment'),
    path("login",views.login, name='login'),
    path("register",views.register, name='register'),
    path("pharmacy",views.pharmacy, name='pharmacy'),
    path("buy",views.buy,name='buy'),
    path("about",views.about, name='about'),
    path("contact",views.contact, name='contact')
]
