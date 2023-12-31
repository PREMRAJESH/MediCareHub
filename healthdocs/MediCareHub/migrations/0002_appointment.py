# Generated by Django 4.2.5 on 2023-10-08 11:23

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('MediCareHub', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='Appointment',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('firstName', models.CharField(max_length=122)),
                ('lastName', models.CharField(max_length=122)),
                ('dob', models.DateField()),
                ('gender', models.CharField(max_length=6)),
                ('address', models.CharField(max_length=122)),
                ('city', models.CharField(max_length=10)),
                ('pincode', models.CharField(max_length=10)),
                ('email', models.EmailField(max_length=39)),
                ('pdate', models.DateField()),
                ('ptime', models.TimeField()),
                ('treatment', models.CharField(max_length=122)),
                ('doctorName', models.CharField(max_length=122)),
            ],
        ),
    ]
