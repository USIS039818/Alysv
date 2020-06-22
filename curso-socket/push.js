var Socket = io.connect('http://localhost:6678', {'forceNew':true});
const PUBLIC_VAPID_KEY =
  "BJP_NmGVE55UO_GDX2x0fCWMFw6OWdXAQe8B-k2UZRampXDur1fEgOmMxJtv-yquBxI9WPzngAB5gIGJ3D_FOKU";

  const subscription = async () => {
    
    const convertedVapidKey = urlBase64ToUint8Array(PUBLIC_VAPID_KEY);

    var register = await navigator.serviceWorker.register("/academia3/sw.js",{
      scope: '/academia3/'
    })

    const subscription = await register.pushManager.subscribe({
      userVisibleOnly: true,
      applicationServerKey: convertedVapidKey
    });

    console.log(subscription);
    
    await Socket.emit('Suscribirse', subscription)
    console.log("Subscribed!");
  };

  function urlBase64ToUint8Array(base64String) {
    const padding = '='.repeat((4 - base64String.length % 4) % 4);
    const base64 = (base64String + padding)
      .replace(/-/g, '+')
      .replace(/_/g, '/');
   
    const rawData = window.atob(base64);
    const outputArray = new Uint8Array(rawData.length);
   
    for (let i = 0; i < rawData.length; ++i) {
      outputArray[i] = rawData.charCodeAt(i);
    }
    return outputArray;
  }

// Service Worker Support
if ("serviceWorker" in navigator) {
  subscription().catch(err => console.log(err));
}