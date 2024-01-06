# MediCareHub - Your Medical Care Solution

MediCareHub is a web application designed to provide medical services efficiently. It is built using Django and Bootstrap, offering essential features like booking appointments, an admin panel for managing the platform, and a pharmacy section for easy access to medications.


## Features

- **Book Appointments:** Patients can easily schedule medical appointments with their preferred healthcare providers through the platform.

- **Admin Panel:** Healthcare professionals have access to a user-friendly admin panel for managing appointments, patient records, and other vital aspects of the system.

- **Pharmacy Section:** Users can browse and purchase medications through the integrated pharmacy section.

## Installation

To get started with MediCareHub on your local machine, follow these steps:

1. Clone the repository:

   ```bash
   git clone https://github.com/PREMRAJESH/MediCareHub.git
   cd MediCareHub
   ```

2. Create a virtual environment and install dependencies:

   ```bash
   python -m venv venv
   source venv/bin/activate
   pip install -r requirements.txt
   ```

3. Configure the database settings in `settings.py`:

   ```python
   DATABASES = {
       'default': {
           'ENGINE': 'django.db.backends.sqlite3',
           'NAME': os.path.join(BASE_DIR, 'db.sqlite3'),
       }
   }
   ```

4. Apply migrations and start the development server:

   ```bash
   python manage.py migrate
   python manage.py runserver
   ```

5. Access the application at `http://localhost:8000` in your web browser.

## Usage

- Create a superuser to access the admin panel:

  ```bash
  python manage.py createsuperuser
  ```

- Access the admin panel at `http://localhost:8000/admin/` and start managing your medical services.

## Project Status

[![GitHub Workflow Status](https://img.shields.io/github/workflow/status/PREMRAJESH/MediCareHub/CI)](https://github.com/PREMRAJESH/MediCareHub/actions)
[![GitHub issues](https://img.shields.io/github/issues/PREMRAJESH/MediCareHub)](https://github.com/PREMRAJESH/MediCareHub/issues)
[![GitHub stars](https://img.shields.io/github/stars/PREMRAJESH/MediCareHub)](https://github.com/PREMRAJESH/MediCareHub/stargazers)

