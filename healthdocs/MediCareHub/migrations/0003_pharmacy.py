# Generated by Django 4.2.5 on 2023-10-09 13:18

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('MediCareHub', '0002_appointment'),
    ]

    operations = [
        migrations.CreateModel(
            name='Pharmacy',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=122)),
                ('price', models.FloatField(max_length=20)),
            ],
        ),
    ]
