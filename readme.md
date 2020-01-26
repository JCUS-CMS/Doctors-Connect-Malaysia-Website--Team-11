# Doctors Connect Malaysia Wordpress Website
## CP3402 Content Management Systems - Team 11
### By: Vishal Manghnani, Kyle Ang, Abraham Garuda Laksono, Michael Wiko Widjaja.
## Staging and Production Sites:
There are 2 branches in this repository:  
* stagingsite
* master  
* Staging: [Staging site](https://a2team11.vishalm.sgedu.site/)  
* Production: [Production site]()  
The stagingsite branch contains wordpress files for the staging website.  
The master branch contains wordpress files for the production website.  

## Instructions on how to install it and setup locally
Requirements:
[I'm an inline-style link with title](https://www.github.com/Varying-Vagrant-Vagrants/VVV "Github VVV")VVV (A Specialised box containing the WP Stack)
[Vagrant](https://www.vagrantup.com/ "Vagrant Website" To run the virtual machine containing VVV

Installation Process:
Step 1: Clone this repository since all the website files are in the project root directory clone all the files inside a folder
`git clone https://github.com/JCUS-CMS/assignment-2-team-11 myfolder/`
Step 2: Obtain the config.yml from the my-defaults folder and overwrite the default config.yml to config.yml which is in your_VVV_folder/config/config.yml

Step 3: initialize the vagrant machine by running `vagrant up --provision` you will need administrative access for it. For windows users you will need to run powershell in admin before running this command. This command can only be run in the same level as where the vagrantfile is.

Step 4: When the website is provisioned run this command to navigate to this directory
`cd your_VVV_folder/www/doctorsconnect/`

Step 5: Replace the public_html inside with the files inside the project directory

Step 6: Run `vagrant reload --provision`

Step 7: Go to your browser and click [Go to Local WP](http://doctorsconnect.test)

------------------------------------
### Group Members -

1. Vishal Manghnani - vmanghnani95@gmail.com
2. Kyle Ang Nathaniel Tecson - kyleang7.08@gmail.com
3. Abraham Garuda Laksono -
4. Michael Wiko Widjaja -
------------------------------------

------------------------------------
## Local Environment Setup -
<br/><br/>
**Setting up VVV in your local machine**
<br/>
*run the following commands:*

```
git clone https://github.com/Varying-Vagrant-Vagrants/VVV.git my_vvv_folder/
cd my_vvv_folder
vagrant plugin install vagrant-hostsupdater --local
vagrant up --provision
```
For Windows users you need to run this command with administrative privileges
<br/>

**ADDING NEW WP-SITE TO VVV**

<br/>

Navigate to your config.yml file by heading into my_vvv_folder/config/config.yml
```
cd ./config/
```

<br/>

###### new website for cms classroom repo

<br/>
In your project directory under my-defaults folder there is a config.yml use that and replace the config.yml inside the my_vvv_folder/config/config.yml
with the config.yml inside my-defaults or you can add these lines after two.wordpress.test in your config/config.yml
```
  WEBSITE_NAME:   
    skip_provisioning: false  
    description: "Trying something new"  
    repo: https://github.com/Varying-Vagrant-Vagrants/custom-site-template.git  
    hosts:  
      - WEBSITE_NAME.test  
    custom:  
      wp_type: subdomain  
      wpconfig_constants:
        WP_DEBUG: true  
        WP_DEBUG_LOG: true  
        WP_DISABLE_FATAL_ERROR_HANDLER: true # To disable in WP 5.2 the FER mode  
 ```

<br/>

If you are setting this for first time then it should be added on the line 47 after the two.wordpress.test<br/>
and then run this command from VVV/ directory:<br/>
```
vagrant reload --provision
```

<br/>

**Setting up GITHUB in your new website/public_html**

<br/>

Assuming you are already in your VVV directory<br/>
```
cd www/wordpress-cms/
```

now we make a copy of your public_html/wp-config.php<br/>
```
cp public_html/wp-config.php wp-config.php
```

then we delete the public_html and create a new directory with same name<br/>
```
rm -rf public_html && mkdir public_html
```

then cd inside public_html<br/>
```
cd public_html
```

Setup git in your directory<br/>
```
git init
```

Create a new branch for easier push and pull<br/>
```
git checkout -b stagingsite  
git checkout stagingsite
```

Link your local git with the remote<br/>
```
git remote add origin https://github.com/JCUS-CMS/assignment-2-team-11.git
```

now setup upstream<br/>
```
git branch --set-upstream-to=origin/stagingsite stagingsite
```

now pull from the remote branch<br/>
```
git pull
```

now copy the wp-config.php file back to your public_html<br/>
```
cp ../wp-config.php wp-config.php
```

now edit your wp-config.php and change the DB settings to:<br/>

```
  define( 'DB_NAME', '<YOUR DB_NAME>' );  
  define( 'DB_USER', '<YOUR DB_USERNAME>' );  
  define( 'DB_PASSWORD', '<YOUR DB_PASSWORD>' );  
  define( 'DB_HOST', '<YOUR DB_SERVER IP>' );  
```

<br/>

**SETTING UP STAGING ON YOUR LOCAL ENVIRONMENT:**

<br/>

create a new branch and link it with your git remote staging <branch>:<br/>

```
git checkout -b staging
```

now for easy pull and push upstream it to your origin/<branch>=staging.<br/>

```
git branch --set-upstream-to=origin/staging staging
```

now pull the latest staging branch commits:<br/>

```
git pull
```

<br/>

**CHANGING GIT BRANCH IN LOCAL ENVIRONMENT:**

<br/>

this is the command to shift between branches in your local environment:<br/>

```
git checkout <branch-name>
```

for example if you are in staging branch and want to shift to stagingsite branch:<br/>

```
git checkout stagingsite
```

<br/>

**EXAMPLE - FOR STAGING**

<br/>

_If you have added a new feature/theme or made any changes/additions to the wordpress files and you want push the changes to staging 
Then follow the following command:<br/>
You have to run the following command from your development branch -_<br/>
<br/>
Add the changed files to your git:

```
git add .
```

now commit the changes you have made:<br/>

```
git commit -m "<your-commit-message>"
```

now push the changes from local to staging :<br/>

```
git push origin staging
```

_**origin** = your remote git repo_
<br/>
_**staging** = your <branch> that you want to push to_

<br/>

now check out the staging URL for changes:<br/>

https://a2team11.vishalm.sgedu.site/<br/>

------------------------------------

<br/>

#### Test command:
test 01 - testing echo command<br/>
test 02 - setting up branches in local<br/>
test 03 - adding all the users to DB<br/>

## Updates to Staging Site & database migration into staging site 
This website utilizes a shared RDS database for working on the local environment.  
This is done to prevent database corruption when multiple users are editng the site content.  
To publish the changes into the staging site, a webhook is used. The webhook is triggered in the stagingsite branch when there is git push. We also utilize another script to get an sql dump from our RDS database. The "pre-push.sh" script will create an import of our sql dump into github.  
Using the sql dump from the RDS, the webhook will update the staging site with the new database and any new changes on a git push.  