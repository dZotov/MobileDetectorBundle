# MobileDatectorBundle

The MobileDatectorBundle allows to datect mobile devices and redirect to mobile site version.

### Application Kernel

Add MobileDatectorBundle to the `registerBundles()` method of your application kernel:

    public function registerBundles()
    {
        return array(
            new App\MobileDetectorBundle\AppMobileDetectorBundle(),
        );
    }

### Configuration

#### Application config.yml

Set mobile version domain on `App\MobileDetectorBundle\Resources\config\services.yml` file:

    parameters:
        redirect_url: m.domain.com

#### Features

##### Setting up cookie to not redirect user to mobile version

It's `isStayOnDesktop()` method in `App\MobileDetectorBundle\MobileDetector.php`