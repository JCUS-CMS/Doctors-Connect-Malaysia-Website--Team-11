# Doctors Connect Malaysia Wordpress Website
## CP3402 Content Management Systems - Team 11
### By: Vishal Manghnani, Kyle Ang, Abraham Garuda Laksono, Michael Wiko Widjaja
## Staging and Production Sites:
There are 2 branches in this repository:
Staging
Master
The staging branch contains wordpress files for the staging website.
The master branch contains wordpress files for the production website.
Staging:
[Staging site](https://a2team11.vishalm.sgedu.site/)

## Instructions on how to install and setup locally
Requirements:
[I'm an inline-style link with title](https://www.github.com/Varying-Vagrant-Vagrants/VVV "Github VVV")VVV (A Specialised box containing the WP Stack)
[Vagrant](https://www.vagrantup.com/ "Vagrant Website" To run the virtual machine containing VVV

Installation Process:
Step 1: Clone this repository since all the website files are in the project root directory clone all the files inside a folder
`git clone https://github.com/JCUS-CMS/assignment-2-team-11 myfolder/`
Step 2: Obtain the config.yml from the my-defaults folder and overwrite the default config.yml to config.yml which is in your_VVV_folder/config/config.yml

Step 3: initialise the vagrant machine by running `vagrant up --provision` you will need administrative access for it. For windows users you will need to run powershell in admin before running this command. This command can only be run in the same level as where the vagrantfile is.

Step 4: When the website is provisioned run this command to navigate to this directory
`cd your_VVV_folder/www/doctorsconnect/`

Step 5: Replace the public_html inside with the files inside the project directory

Step 6: Run `vagrant reload --provision`

Step 7: Go to your browser and click [Go to Local WP](http://doctorsconnect.test)
